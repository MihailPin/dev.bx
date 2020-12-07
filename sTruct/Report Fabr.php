<?php
interface Report
{
	public function getContent(): string;
}

class TextReport implements Report
{
	protected $text;

	public function setText(string $text): void
	{
		$this->text = $text;
	}

	public function getContent(): string
	{
		return $this->text."\n";
	}
}

class HtmlReport implements Report
{
	protected $header;
	protected $body;

	public function setHeader(string $header): void
	{
		$this->header = $header;
	}

	public function setBody(string $body): void
	{
		$this->body = $body;
	}

	public function getContent(): string
	{
		return "<h1>" . htmlspecialchars($this->header) . "</h1>\n"
			. "<p>" . htmlspecialchars($this->body) . "</p>\n\n";
	}
}

abstract class ReportFactory
{
	protected $header;
	protected $body;

	public function __construct(string $header, string $body)
	{
		$this->header=$header;
		$this->body=$body;
	}
	abstract public function createReport(): Report;

}
class TextReportFactory extends ReportFactory
{
	public function createReport(): Report
	{
		$report= new TextReport();
		$report->setText($this->header."\n".$this->body."\n\n");
		return $report;
	}
}

class HtmlReportFactory extends ReportFactory
{
	public function createReport(): Report
	{
		$report= new HtmlReport();
		$report->setHeader($this->header);
		$report->setBody($this->body);
		return $report;
	}
}
class ReportPrinter
{
	public const REPORT_TYPE_TEXT = 'text';
	public const REPORT_TYPE_HTML = 'html';

	public static function printReport(ReportFactory $reportFactory):void
	{
		$report = $reportFactory ->createReport();
		echo $report->getcontent();
	}
	public static function printReportByTypes(string $type, string $header,string $body):void
	{
		if($type===self::REPORT_TYPE_TEXT)
		{
			$factory = new TextReportFactory($header,$body);
		}
		elseif($type===self::REPORT_TYPE_HTML)
		{
			$factory = new HtmlReportFactory($header,$body);
		}
		else
			{
				throw new Exception('Wrong report type');
			}
		self::printReport($factory);
	}
}
$header = "Report title";
$body = "Report body";


ReportPrinter::printReportByTypes(ReportPrinter::REPORT_TYPE_TEXT,$header,$body);
ReportPrinter::printReportByTypes(ReportPrinter::REPORT_TYPE_HTML,$header,$body);