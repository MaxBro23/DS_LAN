<?php
function get_r_build()
{
  global $max_build;
  global $village;
  // Er baut zuerst Holzfäller, Lehmgrube und Eisenmiene auf 5/5/3 damit er genug Rohstoffe bekommt.
  if ($village["wood"] > 5 AND $village["stone"] > 5 AND $village["iron"] > 3)
  {
    if ($village["main"] < $max_build["main"])
    {
      $builds[] = "main";     
    }
    
    if ($village["main"] >= 3)
    {
      if ($village["barracks"] < $max_build["barracks"])
      {
        $builds[] = "barracks";        
      }
    }
    
    if ($village["main"] >= 10 AND $village["smith"] >= 5 AND $village["barracks"] >= 5)
    {
      if ($village["stable"] < $max_build["stable"])
      {
        $builds[] = "stable";        
      }
    }
    
    if ($village["main"] >= 10 AND $village["smith"] >= 10 AND $village["barracks"] >= 10)
    {
      if ($village["garage"] < $max_build["garage"])
      {
        $builds[] = "garage";        
      }
    }
    
    if ($village["main"] >= 20 AND $village["smith"] >= 20 AND $village["market"] >= 10)
    {
      if ($village["snob"] < $max_build["snob"])
      {
        $builds[] = "snob";        
      }
    }
    
    if ($village["main"] >= 5 AND $village["barracks"] >= 5)
    {
      if ($village["smith"] < $max_build["smith"])
      {
        $builds[] = "smith";        
      }
    }
    
    if ($village["main"] >= 1)
    {
      if ($village["place"] < $max_build["place"])
      {
        $builds[] = "place";    
      }
    }
    
    if ($village["storage"] >= 3 AND $village["main"] >= 3)
    {
      if ($village["market"] < $max_build["market"])
      {
        $builds[] = "market";
      }
    }
    
    if ($village["main"] >= 1)
    {
      if ($village["wood"] < $max_build["wood"])
      {
        $builds[] = "wood";
      }
    }
    
    if ($village["main"] >= 1)
    {
      if ($village["stone"] < $max_build["stone"])
      {
        $builds[] = "stone";
      }
    }
    
    if ($village["main"] >= 1)
    {
      if ($village["iron"] < $max_build["iron"])
      {
        $builds[] = "iron";
      }
    }
    
    if ($village["main"] >= 1)
    {
      if ($village["farm"] < $max_build["farm"])
      {
        $builds[] = "farm";
      }
    }
    
    if ($village["main"] >= 1)
    {
      if ($village["storage"] < $max_build["storage"])
      {
        $builds[] = "storage";
      }
    }
    
    if ($village["main"] >= 1)
    {
      if ($village["hide"] < $max_build["hide"])
      {
        $builds[] = "hide";
      }
    }
    
    if ($village["barracks"] >= 1)
    {
      if ($village["wall"] < $max_build["wall"])
      {
        $builds[] = "wall";
      }
    }
    }
    
    else {
    if ($village["main"] >= 1)
    {
      if ($village["wood"] < $max_build["wood"])
      {
        $builds[] = "wood";        
      }
    }
    
    if ($village["main"] >= 1)
    {
      if ($village["stone"] < $max_build["stone"])
      {
        $builds[] = "stone";        
      }
    }
    
    if ($village["main"] >= 1)
    {
      if ($village["iron"] < $max_build["iron"])
      {
        $builds[] = "iron";
      }
    }
  }
  if (empty($builds))
  {
    $builds[] = "none";
  }
  
  $out = $builds[rand(0,count($builds)-1)];
  return $out;
}
?>