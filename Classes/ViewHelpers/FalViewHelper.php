<?php
namespace Cbrunet\CbFoundation\ViewHelpers;

class FalViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * @var \TYPO3\CMS\Core\Resource\FileRepository
	 * @inject
	 */
	protected $fileRepository;

	/**
	 * Find FileReference objects by relation to other records
	 *
	 * @param int $uid The UID of the related record (needs to be the localized uid, as translated IRRE elements relate to them)
	 * @param string $as The alias to use for the found files
	 * @param string $tableName Table name of the related record
	 * @param string $fieldName Field name of the related record
	 * @param string $categories Categories filter (comma separated list)
	 *
	 * @return string The render template
	 */
	public function render($uid, $as = 'objects', $tableName = 'tt_content', $fieldName = 'image', $categories = '') {

		$filesFromRepository = $this->fileRepository->findByRelation($tableName, $fieldName, $uid);
		if (!empty($categories)) {
			$filesFromRepository = $this->filterCategories($filesFromRepository, $categories);
		}

		$this->templateVariableContainer->add($as, $filesFromRepository);
		$content = $this->renderChildren();
		$this->templateVariableContainer->remove($as);

		return $content;
	}

	/**
	 * Filter the file list using given categories.
	 *
	 * If a file has no category assigned, it is kept.
	 * If a file has at least one category in the categories list, is is kept.
	 * If categories list is empty, all files are kept.
	 *
	 * @param array $files File list
	 * @param string $categories Categories list (comma separated list)
	 *
	 * @return array Filtered file list
	 */
	protected function filterCategories($files, $categories) {
		$cat_array = array_map("intval", explode(",", $categories));
		$filt_files = array();

		$select_fields = 'sys_category_record_mm.uid_local';
		$from_table = 'sys_file_metadata JOIN sys_category_record_mm ON sys_category_record_mm.uid_foreign=sys_file_metadata.uid AND sys_category_record_mm.tablenames = "sys_file_metadata"';
		$where_clause = 'sys_file_metadata.uid = :uid';
		$groupBy = 'sys_file_metadata.uid';

		$stmt = $GLOBALS['TYPO3_DB']->prepare_SELECTquery($select_fields,
			$from_table, $where_clause);

		foreach ($files as $file) {
			$metadata = $file->getOriginalFile()->_getMetaData();
			$uid = $metadata['uid'];
			$stmt->execute(array(':uid' => $uid));
			if ($stmt->rowCount() == 0) {
				$filt_files[] = $file;
			}
			while (($row = $stmt->fetch()) !== FALSE) {
				if (in_array($row['uid_local'], $cat_array)) {
					$filt_files[] = $file;
					break;
				}
			}
		}

		$stmt->free();

		return $filt_files;
	}

}

?>