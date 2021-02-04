
<?php

require ('FactoryTask.php');

$documentText = 'Document text here';

DocumentPrinter::print('text', $documentText);
//TextDocument

DocumentPrinter::print('pdf', $documentText);
//PdfDocument




/*
 	Âîñïîëüçóéòåñü øàáëîíîì ïðîåêòèðîâàíèÿ "Ôàáðè÷íûé ìåòîä"
	$documentText = 'Document text here';
	DocumentPrinter::print('text', $documentText);
	//TextDocument
	DocumentPrinter::print('pdf', $documentText);
	//PdfDocument
 */