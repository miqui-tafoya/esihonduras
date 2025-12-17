/**
 * This configuration was generated using the CKEditor 5 Builder. You can modify it anytime using this link:
 * https://ckeditor.com/ckeditor-5/builder/#installation/NoNgNARATAdCMAYKQBwHYoEYAsBOEuU2KmUI2mAzGgriiJpiOZrqwo9pU7StshACmAZ2QIwwTGHEzpYTAF1IaXJSgAjAMYATCAqA
 */

import {
	ClassicEditor,
	Alignment,
	AutoImage,
	Autosave,
	BlockQuote,
	Bold,
	CodeBlock,
	Essentials,
	Fullscreen,
	Heading,
	ImageBlock,
	ImageCaption,
	ImageEditing,
	ImageInline,
	ImageInsertViaUrl,
	ImageInsert,
	ImageResize,
	ImageStyle,
	ImageTextAlternative,
	ImageToolbar,
	ImageUpload,
	ImageUtils,
	Italic,
	Link,
	LinkImage,
	List,
	ListProperties,
	MediaEmbed,
	Paragraph,
	RemoveFormat,
	SimpleUploadAdapter,
	SourceEditing,
	SpecialCharacters,
	SpecialCharactersArrows,
	SpecialCharactersCurrency,
	SpecialCharactersEssentials,
	SpecialCharactersLatin,
	SpecialCharactersMathematical,
	SpecialCharactersText,
	Strikethrough,
	Subscript,
	Superscript,
	Table,
	TableCaption,
	TableCellProperties,
	TableColumnResize,
	TableLayout,
	TableProperties,
	TableToolbar,
	Underline,
	WordCount
} from 'ckeditor5';

import translations from 'ckeditor5/translations/es.js';

import ExploradorPlugin from './exploradorMediosCKEditor.js';

const LICENSE_KEY = 'GPL';

const editorConfig = {
	simpleUpload: {
		uploadUrl: subirimagen
		// withCredentials: true,
		// headers: {
		// 	'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
		// }
	},
	toolbar: {
		items: [
			'fullscreen',
			'|',
			'undo',
			'redo',
			'|',
			'heading',
			'alignment',
			'bold',
			'italic',
			'underline',
			'strikethrough',
			'subscript',
			'superscript',
			'removeFormat',
			'specialCharacters',
			'|',
			'insertTable',
			'insertTableLayout',
			'link',
			'customDialog',
			'insertImage',
			'mediaEmbed',
			'blockQuote',
			'codeBlock',
			'|',
			'bulletedList',
			'numberedList',
			'|',
			'sourceEditing'
		],
		shouldNotGroupWhenFull: true
	},
	ui: {
		viewportOffset: { top: 47 }
	},
	plugins: [
		Alignment,
		AutoImage,
		Autosave,
		BlockQuote,
		Bold,
		CodeBlock,
		Essentials,
		Fullscreen,
		Heading,
		ImageBlock,
		ImageCaption,
		ImageEditing,
		ImageInline,
		ImageInsertViaUrl,
		ImageInsert,
		ImageResize,
		ImageStyle,
		ImageTextAlternative,
		ImageToolbar,
		ImageUpload,
		ImageUtils,
		Italic,
		Link,
		LinkImage,
		List,
		ListProperties,
		MediaEmbed,
		Paragraph,
		RemoveFormat,
		SimpleUploadAdapter,
		SourceEditing,
		SpecialCharacters,
		SpecialCharactersArrows,
		SpecialCharactersCurrency,
		SpecialCharactersEssentials,
		SpecialCharactersLatin,
		SpecialCharactersMathematical,
		SpecialCharactersText,
		Strikethrough,
		Subscript,
		Superscript,
		Table,
		TableCaption,
		TableCellProperties,
		TableColumnResize,
		TableLayout,
		TableProperties,
		TableToolbar,
		Underline,
		WordCount,
		ExploradorPlugin
	],
	fullscreen: {
		onEnterCallback: container =>
			container.classList.add(
				'editor-container',
				'editor-container_classic-editor',
				'editor-container_include-word-count',
				'editor-container_include-fullscreen',
				'main-container'
			)
	},
	heading: {
		options: [
			{
				model: 'paragraph',
				title: 'Paragraph',
				class: 'ck-heading_paragraph'
			},
			{
				model: 'heading1',
				view: 'h1',
				title: 'Heading 1',
				class: 'ck-heading_heading1'
			},
			{
				model: 'heading2',
				view: 'h2',
				title: 'Heading 2',
				class: 'ck-heading_heading2'
			},
			{
				model: 'heading3',
				view: 'h3',
				title: 'Heading 3',
				class: 'ck-heading_heading3'
			},
			{
				model: 'heading4',
				view: 'h4',
				title: 'Heading 4',
				class: 'ck-heading_heading4'
			},
			{
				model: 'heading5',
				view: 'h5',
				title: 'Heading 5',
				class: 'ck-heading_heading5'
			},
			{
				model: 'heading6',
				view: 'h6',
				title: 'Heading 6',
				class: 'ck-heading_heading6'
			}
		]
	},
	image: {
		toolbar: [
			'toggleImageCaption',
			'imageTextAlternative',
			'|',
			'imageStyle:inline',
			'imageStyle:wrapText',
			'imageStyle:breakText',
			'|',
			'resizeImage'
		]
	},
	initialData:
		'',
	language: 'es',
	licenseKey: LICENSE_KEY,
	link: {
		addTargetToExternalLinks: true,
		defaultProtocol: 'https://',
		decorators: {
			toggleDownloadable: {
				mode: 'manual',
				label: 'Downloadable',
				attributes: {
					download: 'file'
				}
			}
		}
	},
	list: {
		properties: {
			styles: true,
			startIndex: true,
			reversed: true
		}
	},
	placeholder: 'Comienza tu artículo aquí...',
	table: {
		contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells', 'tableProperties', 'tableCellProperties']
	},
	translations: [translations]
};

ClassicEditor
	.create(document.querySelector('#editor'), editorConfig)
	.then(editor => {
		editor.editing.view.change(writer => {
			writer.setStyle('min-height', '500px', editor.editing.view.document.getRoot());
		});
		window.editorInstance = editor;
		const wordCount = editor.plugins.get('WordCount');
		document.querySelector('#editor-word-count').appendChild(wordCount.wordCountContainer);

		return editor;
	});
