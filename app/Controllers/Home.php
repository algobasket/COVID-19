<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		helper('scrapper');
		
		$url = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQuDj0R6K85sdtI8I-Tc7RCx8CnIxKUQue0TCUdrFOKDw9G3JRtGhl64laDd3apApEvIJTdPFJ9fEUL/pubhtml?gid=0&single=true';
		$rawContent =  curl_get_contents($url);
		
		$extractedContent = extract_section($rawContent,'<tbody>','</tbody>',"","",0,"",0,0,0,0,0);
		$extractedContentArray =  explode('</tr>',$extractedContent);
		$i = 0;
		
		foreach($extractedContentArray as $r)
		{
				$explode =  explode('</div></th><td class="s0">',$r);
				$html =  $explode[1];
				$explode2 =  explode('</td>',$html);
				print_r($r);  
		        //die;
				foreach($explode2 as $r2)
				{
				$explode3 = explode('<td',$r2);
				$data[] = $explode3[1]; 
				}
				$country   = str_replace('class="s0">','',$data[1]);
				$country   = trim(strip_tags(str_replace('class="s0 softmerge">','',$country)));
				$case      = trim(strip_tags(str_replace('class="s1">','',$data[2])));
				$death     = trim(strip_tags(str_replace('class="s1">','',$data[3])));
				$recovered = trim(strip_tags(str_replace('class="s1">','',$data[4]))); 
				
				
				if($country && $country != 'Noname1')
				{   
					echo $i;
					$time = time;
					$created = date('d-m-Y');
					$updated = date('d-m-Y');
					$arr = array(
						'country' => $country,
						'cases' => $case,
						'death' => $death,
						'recovered' => $recovered,
						'timestamp' => time(),
						'created' => $created,
						'updated' => $updated,
						'status' => 1
					);

					echo json_encode($arr,true); 
					
					// if($_GET['t']=='json')
					// {
					// 	echo json_encode($arr,true);
					// }elseif($_GET['t']=='array'){
					// 	print_r($arr);
					// }else{
					// 	echo json_encode($arr,true);
					// }
						
			
				}
				unset($data);
				echo PHP_EOL;
				$i++;
		}
		
	}

	//--------------------------------------------------------------------

}
