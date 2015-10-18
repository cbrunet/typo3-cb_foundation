..  Content substitution
	...................................................
	Hint: following expression |my_substition_value| will be replaced when rendering doc.

.. |author| replace:: Charles Brunet <charles AT cbrunet.net>
.. |extension_key| replace:: cb_foundation
.. |extension_name| replace:: Foundation framework
.. |extension_version| replace:: 1.5.3
.. |typo3| image:: Images/Typo3.png
.. |time| date:: %Y-%m-%d %H:%M

..  Custom roles
	...................................................
	After declaring a role like this: ".. role:: custom", the document may use the new role like :custom:`interpreted text`. 
	Basically, this will wrap the content with a CSS class to be styled in a special way when document get rendered.
	More information: http://docutils.sourceforge.net/docs/ref/rst/roles.html

.. role:: code
.. role:: typoscript
.. role:: typoscript(code)
.. role:: ts(typoscript)
.. role:: php(code)
