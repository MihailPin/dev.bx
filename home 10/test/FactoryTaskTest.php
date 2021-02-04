<?php
//FactoryTask.php
use \PHPUnit\Framework\TestCase;
require_once (__DIR__.'/lib/FactoryTask.php');

class FactoryTaskTest extends TestCase
{
    public function testTextDocumentPrinter() : void
    {
        $text = 'Text Text Text Text';
        $this->expectOutputString("TextDocument: {$text}\n");

        DocumentPrinter::print('text', $text);
    }

    public function testPdfDocumentPrinter() : void
    {
        $text = 'Pdf Pdf Pdf Pdf';
        $this->expectOutputString("PdfDocument: {$text}\n");

        DocumentPrinter::print('pdf', $text);
    }

    public function testInvalidArgumentDocumentPrinter() : void
    {
        $text = 'Test Test Test Test';
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Wrong document type');

        DocumentPrinter::print('textpdf', $text);
    }

    public function testTextDocumentFactory() : void
    {
        $textDocument = new TextDocument('Text Text Text Text');

        $textDocumentFactory = new TextDocumentFactory('Text Text Text Text');

        self::assertEquals($textDocument, $textDocumentFactory->createDocument());
    }

    public function testPdfDocumentFactory() : void
    {
        $pdfDocument = new PdfDocument();
        $pdfDocument->setText("Pdf Pdf Pdf Pdf");

        $pdfDocumentFactory = new PdfDocumentFactory("Pdf Pdf Pdf Pdf");

        self::assertEquals($pdfDocument, $pdfDocumentFactory->createDocument());
    }
}