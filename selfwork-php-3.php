<?php
//  Selfwork PHP 3
//  Dati i seguenti array:
 
//      $words1 = [
//        'vostro',
//        67,
//        'essere',
//        'colle',
//        'mi',
//        'sempre',
//      [
//        'oscura',
//        'era',
//        89,
//        [
//        'mezzo',
//         'E'
//        ],
//      'ritrovai',
//      'per'
//      ],
//      'diritta'
//      ];
 
//      $words2 = [
//        'elemento1' => 25.89,
//        'elemento2' => 'possa',
//        'elemento3' => [
//          'Virgilio',
//          'Favore',
//          'favore',
//          ['fortuna']
//        ],
//       'fine' => '!'
//      ];
 
 
 
//      Crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo, attraverso l’accesso agli array sopra: “Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“.
 
 
//  HINT:
 
//      Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo piu' opportuno: nuove variabili, concatenamenti, ecc ecc.





 // Gli array forniti
$words1 = [
    'vostro',
    67,
    'essere',
    'colle',
    'mi',
    'sempre',
    [
      'oscura',
      'era',
      89,
      [
        'mezzo',
        'E'
      ],
      'ritrovai',
      'per'
    ],
    'diritta'
  ];
  
  $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
      'Virgilio',
      'Favore',
      'favore',
      ['fortuna']
    ],
    'fine' => '!'
  ];
  
  // Array con le parole mancanti
  $missingWords = [
    'Nel',        // All'inizio della frase
    'di',         // Per la struttura della frase
    'cammin',     // Parte della frase
    'nostra',     // Per "nostra vita"
    'vita',       // Completamento di "nostra vita"
    'una',        // Per "una selva oscura"
    'che',      // Parte della frase "che la diritta"
  ];
  
  // Estrazione dei valori corretti
  $mezzo = $words1[6][3][0];  // "mezzo"
  $mi = $words1[4];  // "mi"
  $ritrovai = $words1[6][4];  // "ritrovai"
  $per = $words1[6][5];  // "per"
  $oscura = $words1[6][0];  // "oscura"
  $era = $words1[6][1];  // "era"
  $diritta = $words1[7];  // "diritta"
  
  // Creazione della stringa finale
  $results = $missingWords[0] . " " . $missingWords[1] . " " . $missingWords[2] . " di cammin di " . $missingWords[3] . " " . $missingWords[4] . " " . $mi . " " . $ritrovai . " " . $per . " una " . $oscura . ", " . $missingWords[6] . " la " . $diritta . " via " . $era . " smarrita";
  
  // Output della stringa finale
  echo $results;


  
?>
