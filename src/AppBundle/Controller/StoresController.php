<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StoresController extends Controller
{
    public function walthamstowAction()
    {
		// opening hours
		$openingHoursRaw = "Sunday: 10:00-17:00, Saturday: 09:00-17:30, Friday: 09:00-18:00";
		$openingHoursRaw .= ", Thursday: 09:00-18:00, Wednesday: 09:00-18:00, Tuesday: 09:00-18:00, Monday: 09:00-18:00";

		$openingHoursRaw = array(
		    "1" => "Sunday: 10:00-17:00",
		    "2" => "Monday: 09:00-18:00",
		    "3" => "Tuesday: 09:00-18:00",
		    "4" => "Wednesday: 09:00-18:00",
		    "5" => "Thursday: 09:00-18:00",
		    "6" => "Friday: 09:00-18:00",
		    "7" => "Saturday: 09:00-17:30"
		);

		$count = count($openingHoursRaw);

		for ($i = 1; $i <= $count; $i++) {
				
		    // echo '<li class="';
		    // if(date("N") == $i){ echo " today"; }
		    // echo '">';

		    // echo $openingHoursRaw[$i];

		    // echo '</li>';
		}

		// $times = explode(" ", $openingHoursRaw);
		// echo $times[1];
		
		// opening hours friendly (the opening hours need to be parsed and returned in a friendly format)
		// i expect the output of this variable to be "The Walthamstow store is open Monday to Friday 9 AM to 6 PM, Saturday 9 AM till 5:30 PM and Sunday 10 AM to 5 PM."
		// do not hard code this! You must process the $openingHoursRaw variable to get this result!
		$openingHoursFriendly = "The Walthamstow store is open " . $openingHoursRaw['1'] . " lipsum";
		
		// reviews
		$reviews = array(
		    array(
			    'name' => 'Joe Bloggs',
			    'score' => '7/10', 
				'body' => 'The service was OK. I had to wait a while!'
			),
			array(
			    'name' => 'John Doe',
			    'score' => '10/10', 
				'body' => 'The service was great. Faultless!'
			), 
			array(
			    'name' => 'Jane Doe',
			    'score' => '9/10', 
				'body' => 'The service was pretty good. Quite impressed'
			),
            array(
			    'name' => 'Alice Doe',
			    'score' => '9/10', 
				'body' => 'The service was pretty good. Quite impressed'
			),	
            array(
			    'name' => 'Graham Doe',
			    'score' => '9/10', 
				'body' => 'The service was pretty good. Quite impressed'
			),			
			array(
			    'name' => 'Bill Gates',
			    'score' => '1/10', 
				'body' => 'The service was terrible!'
			), 
			array(
			    'name' => 'Shaun Doe',
			    'score' => '8/10', 
				'body' => 'The service was pretty good. Quite impressed'
			),
		);
		
		// reviews friendly (you need to sort the reviews and show the best reviews at the top as shown in the template)
		// if there are multiple reviews with the same score then they should be sorted alphabetically by the reviewer name
		// in the reviews above I expect to see Alice Doe's review higher up than Graham
		$reviewsFriendly = array();
		
        return $this->render(
            'stores/view.html.twig',
            [
			'openingHoursFriendly' => $openingHoursFriendly, 
			'reviewsFriendly' => $reviewsFriendly
			]
        );
    }
}