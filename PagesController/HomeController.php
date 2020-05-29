<?php

require_once '../Services/FundamentalFactory.php';
    

class HomeController {
    //put your code here
    function slideShow()
    {
        
        for($i=0;$i<4;$i++)
        {
            if($i==0)
            {
                echo '<li data-target="#testimonial" data-slide-to="0" class="active"></li>';
            }  else {
                echo '<li data-target="#testimonial" data-slide-to="'.$i.'"></li>';
            }

        }
    }
        function slidInfo()
        {   
            $temp=new FundamentalFactory();
            $ret=$temp->getType("book")->getAllItems();
            for($i=0;$i<4;$i++)
            {
                $str=substr($ret[$i]->getDescription(), 0,200);
                if(strlen($ret[$i]->getDescription())>200)
                {
                    $str=$str."...";
                }
                if($i==0)
                {
                    echo '<div class="carousel-item active">						
                                <div class="carousel-caption d-none d-block">
                                        <img src="img/'.$ret[$i]->getImage().'"  alt="'.$ret[$i]->getName().'" style="width:250px;height:250px;">
                                        <h3>'.$ret[$i]->getName().'</h3>
                                        <p>'.$str.'</p>
                                </div>
                            </div>';
                }  else {
                    echo '<div class="carousel-item">
                                <div class="carousel-caption d-none d-block">
                                        <img src="img/'.$ret[$i]->getImage().'"  alt="'.$ret[$i]->getName().'" style="width:250px;height:250px;">
                                        <h3>'.$ret[$i]->getName().'</h3>
                                        <p>'.$str.'</p>
                                </div>
                          </div>';
                }

            }
        }
    
    
}
