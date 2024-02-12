<?php
// class Welcome {
//     const MESSAGE = "Welcome";
//   }
  
//   echo Goodbye::MESSAGE;

class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting";
    public function byebye() {
      echo self::LEAVING_MESSAGE;
    }
  }
  
  $goodbye = new Goodbye();
  $goodbye->byebye();
?>