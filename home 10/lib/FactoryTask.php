<?php

interface Document
{
    public function print(): void;
}

abstract class DocumentFactory
{
    protected $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    abstract public function createDocument(): Document;
}

class TextDocumentFactory extends DocumentFactory
{
    public function createDocument(): Document
    {
        $textDocument = new TextDocument($this->text);
        return $textDocument;
    }
}

class PdfDocumentFactory extends DocumentFactory
{
    public function createDocument(): Document
    {
        $pdfDocument = new PdfDocument();
        $pdfDocument->setText($this->text);
        return $pdfDocument;
    }
}

class DocumentPrinter
{
    public static function printDocument(DocumentFactory $documentFactory): void
    {
        $document = $documentFactory->createDocument();
        $document->print();
    }

    public static function print(string $type, string $text): void
    {
        if ($type === 'text')
        {
            $factory = new TextDocumentFactory($text);
        }
        elseif ($type === 'pdf')
        {
            $factory = new PdfDocumentFactory($text);
        }
        else
        {
            throw new InvalidArgumentException('Wrong document type');
        }

        self::printDocument($factory);
    }
}

class TextDocument implements Document
{
    protected $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function print(): void
    {
        echo "TextDocument: {$this->text}\n";
    }
}

class PdfDocument implements Document
{
    protected $text;

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function print(): void
    {
        echo "PdfDocument: {$this->text}\n";
    }
}