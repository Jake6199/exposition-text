<?php declare(strict_types=1);

namespace OpenMetricsPhp\Exposition\Text\Metrics\Histogram;

use OpenMetricsPhp\Exposition\Text\Interfaces\ProvidesSampleString;

final class HistogramCount implements ProvidesSampleString
{
	/** @var int */
	private $count;

	private function __construct( int $count )
	{
		$this->count = $count;
	}

	public static function new( int $count ) : self
	{
		return new self( $count );
	}

	public function getSampleString() : string
	{
		return sprintf( '_count %d', $this->count );
	}
}