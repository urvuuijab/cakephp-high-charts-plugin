<?php
	public function column()
		$chartName = 'Column Chart';
	        $this->HighCharts->setChartParams
		$series->addName('Example Online Store')->addData($chartData);
		$mychart->addSeries($series);	
	public function column_rotated()
function(){ return '<b>'+ this.x +'</b><br/>'+ 'Population in 2008: '+ Highcharts.numberFormat(this.y, 1) +' millions';}
EOF;
		$mychart = $this->HighCharts->create
        $this->HighCharts->setChartParams
        $series = $this->HighCharts->addChartSeries();
		$series->addName('Population')->addData($chartData);
	}
	public function pie()
        $series = $this->HighCharts->addChartSeries();
		$series->addName('Browser Share')->addData($chartData);
		$pieChart->addSeries($series);
	}
		$browsers = $this->Browser->find('all', array('fields' => array('name', 'amount')));
		$categories  = Set::classicExtract($browsers, '{n}.Browser.name');
		$browserData = Set::classicExtract($browsers, '{n}.Browser.amount'); 
		foreach ($browserData as $key => $value) {
			$browserData[] = &intval($value);
		$chartName = 'Bar Chart';
        $series = $this->HighCharts->addChartSeries();
		$series->addName('Browser Usage')->addData($browserData);
	   	$this->HighCharts->setChartParams
					'title'						=> 'Monthly Average Temperature',
					'legendEnabled' 			=> TRUE,
					'yAxisTitleText' 			=> 'Temperature',
					/* autostep options */
        $series1 = $this->HighCharts->addChartSeries();
		$series1->addName('Tokyo')->addData($chartData1);
		$mychart->addSeries($series1);
	}
function() { return '<b>'+ this.series.name +'</b><br/>'+ this.x +': '+ this.y +'°C';}
EOF;
		$mychart = $this->HighCharts->create
	   	$this->HighCharts->setChartParams
					'title'						=> 'Monthly Average Temperature',
		            'tooltipEnabled' 			=> TRUE,
					'xAxisLabelsEnabled' 		=> TRUE,
					'plotOptionsLineDataLabelsEnabled' => TRUE,
			);
		$series1->addName('Tokyo')->addData($chartData1);
		$mychart->addSeries($series1);
	}
}