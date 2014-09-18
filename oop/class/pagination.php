<?php
	/*Created by Budy -updated 21 maret 2012 */
Class Pagination{
			
		public  function create_page($config=array()){        
        
		if(!empty($config) and is_array($config)):
			
			$url  	  = $config['url'];
			$jml_page = ceil($config['total_data']/$config['limit']);
			$page	  = $config['uri_segment'];
			$limit	  = $config['limit'];
			$total	  = $config['total_data'];
		
		endif;
		
				
        $prev = $page - 1;                          
        $next = $page + 1;
        $lpm1 = $jml_page - 1;
         
        $pagination = "";
		
        if($jml_page > 1)
        {   
                    $pagination .= "Page $page of $jml_page ";
			if ($page > 1){
				
				$pagination.= "<a href={$url}&nav=1> << First</a> <a href={$url}&nav=$prev> < Prev</a> "; 
			}

			if( $jml_page < 10){ /*jika jml page < 10 pake paging biasa*/
				if ($jml_page < 7 + ($limit * 2))
				{   
					for ($i = 1; $i <= $jml_page; $i++)
					{
						if ($i == $page)
							$pagination.= "<span class=\"selected-page\">$i</span> ";
						else
							$pagination.= "<a href='{$url}&nav=$i'>$i</a> ";                    
					}
				}
				elseif($jml_page > 5 + ($limit * 2))
				{
					if($page < 1 + ($limit * 2))     
					{
						for ($i = 1; $i < 4 + ($limit * 2); $i++)
						{
							if ($i == $page){
								$pagination.= "<span class=\"selected-page\">$i</span> ";
								
							}
							else
								$pagination.= "<a href='{$url}&nav=$i'>$i</a> ";                    
						}
						$pagination.= "...";
						$pagination.= "<a href='{$url}&nav=$lpm1'>$lpm1</a> ";
						$pagination.= "<a href='{$url}&nav=$jml_page'>$jml_page</a> ";      
					}
					elseif($jml_page - ($limit * 2) > $page && $page > ($limit * 2))
					{
						if($page==1) $satu.="<span class=\"selected-page\">1</span> ";
						else $satu=1;
						if($page==2) $dua.="<span class=\"selected-page\">2</span> ";
						else $dua=2;
						$pagination.= "<a href='{$url}&nav=1'>$satu</a> ";
						$pagination.= "<a href='{$url}&nav=2'>$dua</a> ";
						$pagination.= "...";
						for ($i = $page - $limit; $i <= $page + $limit; $i++)
						{
							if ($i == $page)
								$pagination.= "<span class=\"selected-page\">$i</span> ";
							else
								$pagination.= "<a href='{$url}&nav=$i'>$i</a> ";                    
						}
						$pagination.= "..";
						$pagination.= "<a href='{$url}&nav=$lpm1'>$lpm1</a> ";
						$pagination.= "<a href='{$url}&nav=$jml_page'>$jml_page</a> ";      
					}
					else
					{   if($page==1) $satu.="<span class=\"selected-page\">1</span> ";
						else $satu=1;
						if($page==2) $dua.="<span class=\"selected-page\">2</span> ";
						else $dua=2;
						$pagination.= "<a href='{$url}&nav=1'>$satu</a> ";
						$pagination.= "<a href='{$url}&nav=2'>$dua</a> ";
						$pagination.= "..";
						for ($i = $jml_page - (2 + ($limit * 2)); $i <= $jml_page; $i++)
						{
							if ($i == $page)
								$pagination.= "<span class=\"selected-page\">$i</span> ";
							else
								$pagination.= "<a href='{$url}&nav=$i'>$i</a> ";                    
						}
					}
				}
			}
			else{ /*kalo jmlpage na besar > 10 pake select value*/
			
				$pagination.= '<select name="page" onchange="javascript:document.location.href=this.value;">';			
				for ($i=1; $i<=$jml_page; $i++) {
					
					if($i==$page){
						$selected='selected=selected';
						$pagination.= '<option value="'.$i.'" '.$selected.'>'.$i.'</option>';								
					}else{
						$pagination.= '<option value='.$url.'&nav='.$i.'>'.$i.'</option>';
					}
				}
			
				$pagination.='</select>';
			}     
            if ($page < $i - 1){ 
                $pagination.= "<a href='{$url}&nav=$next'>Next ></a> ";
                $pagination.= "<a href='{$url}&nav=$jml_page'>Last >></a>";
            }else{
                $pagination.= "";
                $pagination.= "";
            }
            $pagination.= "\n";      
        }
          
        return $pagination;
    } 
		
}
