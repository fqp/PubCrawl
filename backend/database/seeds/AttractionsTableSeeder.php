<?php

use App\Models\Attraction;
use Illuminate\Database\Seeder;

class AttractionsTableSeeder extends Seeder
{
  public function run()
  {
    Attraction::create([
      'name' => 'DAF Museum',
      'desc' => "A lasting memory about entrepreneurship in the city of Eindhoven is the DAF Museum. Amongst others because it houses a forge.",
      'type' => 'museum',
      'lat' => 51.4372204,
      'lon' => 5.4882538,
      'addr1' => 'Tongelresestraat 27',
      'addr2' => '5613 DA Eindhoven',
      'phone' => '+31 402444364'
    ]);

    Attraction::create([
      'name' => 'Philips Museum',
      'desc' => "The old factory where Philips made his first incandescent lamp, has undergone extensive renovation and been extended to an interactive museum where heritage and innovation come together.",
      'type' => 'museum',
      'lat' => 51.4396382,
      'lon' => 5.4731565,
      'addr1' => 'Emmasingel 31',
      'addr2' => '5611 AZ Eindhoven',
      'phone' => '+31 402359030'
    ]);

    Attraction::create([
      'name' => 'preHistorisch Dorp',
      'desc' => "A lost city comes to life again at the Eindhoven Museum. The heritage park explains the life in Eindhoven farms and houses in the pre-historic and Middle Ages.",
      'type' => 'museum',
      'lat' => 51.4243765,
      'lon' => 5.4718654,
      'addr1' => 'Boutenslaan 161 b',
      'addr2' => '5644 TV Eindhoven',
      'phone' => '+31 402522281'
    ]);

    Attraction::create([
      'name' => 'PSV Museum',
      'desc' => "Entrance 17 of Philips Stadium will take you to the PSV Museum where you can relive the most important events in the 100 years' history of PSV. A must-see for every PSV supporter, in fact, for every football fan.",
      'type' => 'museum',
      'lat' => 51.4411839,
      'lon' => 5.4661848,
      'addr1' => 'Stadionplein 4 Ingang 17',
      'addr2' => '5616 RX Eindhoven',
      'phone' => '+31 000000000'
    ]);

    Attraction::create([
      'name' => 'Van Abbemuseum',
      'desc' => "Van Abbemuseum was founded in 1936 and is one of the most prestigious museums for modern at with an international collection of more than 2,700 works of art, including works by Lissitzky, Picasso, Dumas, Dijkstra, Mondriaan and Picasso. The original Van Abbe building was renovated and extended in 2003. The new building is designed by Abel Cahen. The museum also holds a library and a nice museum café. Information on opening hours, admission and guided tours can be found on the Van Abbemuseum website.",
      'type' => 'museum',
      'lat' => 51.4345501,
      'lon' => 5.4797656,
      'addr1' => 'Bilderdijklaan 10',
      'addr2' => '5611 NH Eindhoven',
      'phone' => '+31 402381042'
    ]);

    Attraction::create([
      'name' => 'Philips Stadion',
      'desc' => "The Philips Stadion is home to soccer club PSV. This beautiful and modern stadium is situated in the city centre of Eindhoven and has been there ever since the foundation of the Philips Sports foundation, back in 1913.",
      'type' => 'sport',
      'lat' => 51.4417374,
      'lon' => 5.4652538,
      'addr1' => 'Frederiklaan 10',
      'addr2' => '5616 NH Eindhoven',
      'phone' => '+31 000000000'
    ]);

    Attraction::create([
      'name' => '18 Septemberplein',
      'desc' => "The intersection of Piazza, Vestdijk, Stationsplein and the Blob in the city centre of Eindhoven.",
      'type' => 'architecture / art',
      'lat' => 51.4414205,
      'lon' => 5.4764374,
      'addr1' => '18 Septemberplein 1',
      'addr2' => '5611AL Eindhoven',
      'phone' => '+31 000000000'
    ]);

    Attraction::create([
      'name' => 'Evoluon',
      'desc' => "Evoluon is an extraordinary building in Eindhoven in the shape of a flying saucer. It was built and decorated by Philips and opened to the public in 1966, in celebration of the company's 75th anniversary. Between 1966 and 1989 it was a science and technique museum. Today, the Evoluon is an iconic and hospitable surrounding where entrepreneurs meet and build at their successes.",
      'type' => 'architecture / art',
      'lat' => 51.4426781,
      'lon' => 5.4439424,
      'addr1' => 'Noord Brabantlaan 1 A',
      'addr2' => '5652LA Eindhoven',
      'phone' => '+31 402504600'
    ]);

    Attraction::create([
      'name' => 'Sint-Catharinakerk',
      'desc' => "Catherine Church is a Roman Catholic church in the inner city of the Dutch city of Eindhoven, dedicated to St. Catherine of Alexandria . The church is located at the Catherine's Square, at the beginning of Stratumseind ​​and was built to replace the dilapidated medieval St. Catherine's Church.",
      'type' => 'architecture / art',
      'lat' => 51.4369042,
      'lon' => 5.4770755,
      'addr1' => 'Kerkstraat 1',
      'addr2' => '5611 GH Eindhoven',
      'phone' => '+31 000000000'
    ]);

    Attraction::create([
      'name' => 'Sint Joriskerk',
      'desc' => "Designed by Hendrik Jacobus van Tulder, St. George Church is a neo-Gothic basilica with three naves that dates from 1885.",
      'type' => 'architecture / art',
      'lat' => 51.4301569,
      'lon' =>  5.4863972,
      'addr1' => 'Sint Jorislaan 51',
      'addr2' => '5614 AA Eindhoven',
      'phone' => '+31 000000000'
    ]);

    Attraction::create([
      'name' => 'City Centre',
      'desc' => "Every tuesday a very extensive market, starting at 09.00h til 14.00h in winter and til 15.30h in summer.",
      'type' => 'market',
      'lat' => 51.439369,
      'lon' => 5.478523,
      'addr1' => 'Markt 1',
      'addr2' => '5611 ED Eindhoven',
      'phone' => '+31 000000000'
    ]);

    Attraction::create([
      'name' => 'Catharina Market',
      'desc' => "A market where you are going without the intention of buying anything, but you never go home empty-handed. Creative and not too polished, just like Eindhoven.",
      'type' => 'market',
      'lat' => 51.4370677,
      'lon' => 5.4774096,
      'addr1' => 'Catharinaplein 1',
      'addr2' => '5611DE Eindhoven',
      'phone' => '+31 000000000'
    ]);

    Attraction::create([
      'name' => 'Biological Market Wilhelminaplein',
      'desc' => "This durable weekly market on saturday offers a wide scale of regional and biological food like vegetables, cheese, meat and bread. From 10.00h til 16.00h.",
      'type' => 'market',
      'lat' => 51.4379052,
      'lon' => 5.4689975,
      'addr1' => 'Wilhelminaplein',
      'addr2' => '5611 HB Eindhoven',
      'phone' => '+31 000000000'
    ]);

    Attraction::create([
      'name' => 'Eindhoven Train Station',
      'desc' => "The current station building was built in 1956 by design of architect Koen van der Gaast and resembles a Philips radio at that time. In the view of Van der Gaast a train station had to get a prominent role in the city compared to other transport systems. Not the human dimension was the starting point, but the urban space was the decisive factor in the measurements. Another striking aspect of his vision was that the station had to have absolutely no recreational function, it was only intended as a pedestrian space: the transition from one transport to another.",
      'type' => 'architecture / art',
      'lat' => 51.4418203,
      'lon' => 5.4802202,
      'addr1' => 'Stationsplein',
      'addr2' => '5611 AB Eindhoven',
      'phone' => '+31 000000000'
    ]);
  }
}
