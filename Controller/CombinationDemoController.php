<?php
/**
 *  CakePHP HighCharts Plugin
 * 
 * 	Copyright (C) 2012 Kurn La Montagne / destinydriven
 *	<https://github.com/destinydriven> 
 * 
 * 	Multi-licensed under:
 * 		MPL <http://www.mozilla.org/MPL/MPL-1.1.html>
 * 		LGPL <http://www.gnu.org/licenses/lgpl.html>
 * 		GPL <http://www.gnu.org/licenses/gpl.html>
 * 		Apache License, Version 2.0 <http://www.apache.org/licenses/LICENSE-2.0.html>
 */
class CombinationDemoController extends HighChartsAppController
{
	public $name = 'CombinationDemo';
	public $components = array('HighCharts.HighCharts');
	public $helpers = array('HighCharts.HighCharts');
	public $uses = array();
	public $layout = 'chart.demo';

	public function combo()
	{
		$janeData = array(3, 2, 1, 3, 4);
		$johnData = array(2, 3, 5, 7, 6);
		$joeData  = array(4, 3, 3, 9, 0);
		$avgData  = array(3, 2.67, 3, 6.33, 3.33);
		
		$pieData = array(
				array(
					'name' => 'Jane',
		                     	'y' => 13,
		                     	'sliced' => true,
		                     	'selected' => true
				     ),
				array('John', 23),
				array('Joe', 19)
			);
				
		$chartName = 'Combination Chart';
		$mychart = $this->HighCharts->create
						 (
							$chartName,
							array
							(
								'type' => 'column',
								'exporting' => TRUE
							)
						 );
	
		$this->HighCharts->setChartParams
		$johnSeries = $this->HighCharts->addChartSeries();
		$joeSeries  = $this->HighCharts->addChartSeries();
		$pieSeries  = $this->HighCharts->addChartSeries();
		$pieSeries->size = 250;
		$mychart->addSeries($janeSeries);
		$mychart->addSeries($avgSeries);
	}
}