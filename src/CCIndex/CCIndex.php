<?php
/**
* Standard controller layout.
* 
* @package PysenCore
*/
class CCIndex implements IController {

   /**
    * Implementing interface IController. All controllers must have an index action.
    */
   public function Index() {   
      global $py;
      $py->data['title'] = "The Index Controller";
   }

}