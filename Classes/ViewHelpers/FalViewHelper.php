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
	 *
	 * @return string The render template
	 */
	public function render($uid, $as = 'objects', $tableName = 'tt_content', $fieldName = 'image') {

		$filesFromRepository = $this->fileRepository->findByRelation($tableName, $fieldName, $uid);

		$this->templateVariableContainer->add($as, $filesFromRepository);
		$content = $this->renderChildren();
		$this->templateVariableContainer->remove($as);

		return $content;

	}

}

?>