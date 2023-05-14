
<!DOCTYPE html>
<html>
  <head>
    <title>Responsive resume / CV template idea with CSS and JQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="description" content="Responsive Resume / CV webpage template sample chronological format example showing profile, skills, education, experience, hobbies, interest and socila made with HTML, SVG, CSS and JQuery; featuring standard and hover CSS keyframes animation and on click class toggle.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Amatica+SC|Bungee+Outline|Bungee+Shade|Ewert|Fredericka+the+Great|Kumar+One+Outline|Ultra" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"></head>
  
  
<body>  
  <!--everything goes in here-->
<div class="container">
  <!--page header-->
@foreach($personal_information as $personal_info)
    <div class="page-header">
        <h1>{{ ($personal_info['first_name'] ?? '') . ' ' . ($personal_info['last_name'] ?? '') }}</h1>
        <p id="h1ptag">{{ 'About:' . ($personal_info['about_me'] ?? '') }}</p>
        <p id="h1ptag">{{ 'Title:' . ($personal_info['profile_title'] ?? '') }}</p>
    </div>
@endforeach
  <!--end of page header-->
  
  <!--start of nav menu-->
  <nav>
    <ul class="showing">
      <li class="nav-item"><a href="#profilesectionh3id">Profile</a></li>
      <li class="nav-item"><a href="#techskillsh3id">Skills</a></li>
      <li class="nav-item"><a href="#educationsectionh3id">Education</a></li>
      <li class="nav-item"><a href="#employmentsectionh3id">Experience</a></li>
      <li class="nav-item"><a href="#hobbiessectionh3id">Hobbies & Interests</a></li>
      <li class="nav-item"><a href="#hobbiessectionh3id">Social</a></li>
    </ul>
    <div class="handle">Menu</div>
  </nav>
  <!--end of nav menu-->
  
  
  <!--start of main content-->
  <div class="main-content">
    <!--svg-->
           
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<!-- Creator: CorelDRAW -->
<div class="svgbrain">
<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   xml:space="preserve"
   width="124px"
   height="75px"
   style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd"
   viewBox="0 0 1024 732"
   id="svg2652"
   sodipodi:version="0.32"
   inkscape:version="0.46"
   sodipodi:docname="Lobes_of_the_brain_NL.svg"
   inkscape:output_extension="org.inkscape.output.svg.inkscape"
   sodipodi:docbase="c:\geda"
   inkscape:export-filename="c:\geda\Lobes_of_the_brain.png"
   inkscape:export-xdpi="21.915184"
   inkscape:export-ydpi="21.915184"
   sodipodi:modified="TRUE"><metadata
   id="metadata3106"><rdf:RDF><cc:Work
       rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type
         rdf:resource="http://purl.org/dc/dcmitype/StillImage" /></cc:Work></rdf:RDF></metadata><sodipodi:namedview
   inkscape:window-height="746"
   inkscape:window-width="1280"
   inkscape:pageshadow="2"
   inkscape:pageopacity="0.0"
   guidetolerance="10.0"
   gridtolerance="10.0"
   objecttolerance="10.0"
   borderopacity="1.0"
   bordercolor="#666666"
   pagecolor="#ffffff"
   id="base"
   inkscape:zoom="0.36467749"
   inkscape:cx="-3.5122185"
   inkscape:cy="415.20496"
   inkscape:window-x="0"
   inkscape:window-y="0"
   inkscape:current-layer="svg2652"
   showgrid="false" />
 <defs
   id="defs2654"><inkscape:perspective
   sodipodi:type="inkscape:persp3d"
   inkscape:vp_x="0 : 365.5 : 1"
   inkscape:vp_y="0 : 1000 : 0"
   inkscape:vp_z="1024 : 365.5 : 1"
   inkscape:persp3d-origin="512 : 243.66667 : 1"
   id="perspective213" />
  <style
   type="text/css"
   id="style2656">
   
    .str2 {stroke:#000000;stroke-width:2}
    .str0 {stroke:#000000;stroke-width:2}
    .str1 {stroke:#000000;stroke-width:4}
    .str3 {stroke:#000000;stroke-width:2;stroke-dasharray:5 7}
    .fil5 {fill:none}
    .fil6 {fill:#000000}
    .fil2 {fill:#FFFFFF}
    .fil1 {fill:#B4D8EC}
    .fil3 {fill:#B6CF9D}
    .fil4 {fill:#F7A6B6}
    .fil0 {fill:#FCFB98}
    .fnt4 {font-weight:normal;font-size:14;font-family:Arial}
    .fnt3 {font-weight:normal;font-size:16;font-family:Arial}
    .fnt2 {font-weight:normal;font-size:18;font-family:Arial}
    .fnt1 {font-weight:normal;font-size:23;font-family:Arial}
    .fnt0 {font-weight:normal;font-size:26;font-family:Arial}
   
  </style>
 
  
  <style
   id="style6"
   type="text/css">
   
    .str2 {stroke:#000000;stroke-width:200}
    .str0 {stroke:#000000;stroke-width:2}
    .str1 {stroke:#000000;stroke-width:4}
    .str3 {stroke:#000000;stroke-width:2;stroke-dasharray:5 7}
    .fil5 {fill:none}
    .fil6 {fill:#000000}
    .fil2 {fill:#FFFFFF}
    .fil1 {fill:#B4D8EC}
    .fil3 {fill:#B6CF9D}
     
  </style>
  <inkscape:perspective
   id="perspective237"
   inkscape:persp3d-origin="512 : 243.66667 : 1"
   inkscape:vp_z="1024 : 365.5 : 1"
   inkscape:vp_y="0 : 1000 : 0"
   inkscape:vp_x="0 : 365.5 : 1"
   sodipodi:type="inkscape:persp3d" /></defs>
 <path
   style="fill: #44aa33"--
   id="path2659"
   d="M 564,54 C 577,52 590,53 602,60 C 640,53 668,59 685,78 C 699,75 714,79 728,89 C 767,106 795,128 817,153 C 853,168 867,186 869,206 C 888,220 900,237 908,256 L 798,413 L 455,370 L 352,209 L 564,54 z "
   class="fil0" /><path
   style="fill:#b4d8ec"--
   id="path2661"
   d="M 573,52 L 558,90 C 494,95 480,115 500,147 C 512,161 490,173 484,189 C 478,209 471,230 461,251 C 461,305 430,301 433,320 L 455,349 L 264,548 C 169,563 118,555 104,528 C 75,518 57,486 51,432 C 36,416 35,401 40,385 C 38,379 37,373 41,367 C 33,341 37,327 42,314 C 44,294 54,277 69,262 C 68,237 83,224 103,216 C 119,165 191,130 220,122 C 239,105 265,95 297,91 C 313,84 328,79 343,77 C 371,59 403,56 435,56 C 461,47 488,44 516,50 L 573,52 z "
   class="fil1" /><path
   style="fill:#ffffff;stroke:#000000;stroke-width:2"
   id="path2663"
   d="M 518,579 C 525,607 538,626 559,634 C 589,648 612,682 636,712 C 649,705 663,699 674,689 L 560,553 L 518,579 z "
   class="fil2 str0" /><path
   style="fill:#ffffff;stroke:#000000;stroke-width:2"
   id="path2665"
   d="M 551,571 C 551,577 552,583 558,589 C 560,623 573,634 591,634 C 671,685 732,688 778,658 C 797,647 827,636 829,625 C 851,614 864,603 876,592 C 895,576 895,548 887,513 C 697,507 601,532 551,571 z "
   class="fil2 str0" /><path
   style="fill:#b6cf9d"--
   id="path2667"
   d="M 564,312 L 830,354 C 869,400 908,446 946,492 C 918,519 880,523 839,517 C 822,526 796,531 757,517 C 742,526 727,532 712,537 C 688,550 663,554 637,554 C 613,558 592,561 583,554 C 568,566 555,571 544,574 C 527,584 513,587 499,590 C 487,619 458,631 418,631 C 391,643 364,644 336,619 C 316,609 297,597 287,573 C 280,565 274,558 268,550 C 265,522 272,497 293,476 C 313,465 316,436 328,416 C 351,389 388,378 427,370 C 444,353 464,341 494,343 C 511,326 531,311 564,312 z "
   class="fil3" /><path
   sodipodi:nodetypes="cccssssssssssccccccc"
   class="fil4"
   d="M 905.55813,255.40242 C 875.01356,281.2308 857.55813,297.40242 832.55813,327.40242 C 825.55813,352.40242 829.55813,377.40242 839.55813,402.40242 C 831.73487,412.12512 818.09732,420.48192 812.681,429.87867 C 809.60776,435.21042 795.26173,474.58483 788.69272,478.12783 C 782.68539,481.36789 777.08023,481.81749 775.24794,487.92808 C 775.02289,488.67862 763.81077,498.93206 762.32044,499.93354 C 752.86125,506.28999 748.48044,505.98061 750.08188,508.46574 C 752.40803,512.07548 753.24773,514.45324 756.66986,515.88175 C 760.092,517.31027 786.99128,524.71495 790.97357,524.20835 C 795.04166,523.69082 810.71556,525.47953 814.64926,525.23296 C 818.50929,524.99102 823.84856,523.1399 827.00743,522.30359 C 831.0173,521.24198 836.70049,516.32165 838.91905,516.45609 C 855.43677,517.45702 874.58035,517.79533 896.92754,515.00203 C 931.23964,506.14763 916.52173,510.80823 947.55813,493.40242 C 957.55813,481.40242 965.55813,465.40242 973.55813,437.40242 C 980.55813,426.40242 979.55813,408.40242 976.55813,391.40242 C 982.55813,367.40242 971.55813,358.40242 956.55813,341.40242 C 952.55813,326.40242 947.55813,307.40242 929.55813,292.40242 C 930.55813,282.40242 925.55813,266.40242 905.55813,255.40242 z"
   id="path19"
   style="fill:#f7a6b6" /><path
   style="fill:none;stroke:#000000;stroke-width:4"
   id="path2671"
   d="M 436,56 C 405,54 370,60 340,77 C 325,78 309,86 296,92 C 267,94 242,104 220,121 C 201,127 181,134 164,149 C 132,168 111,190 101,217 C 80,224 69,240 69,262 C 54,275 44,292 42,314 C 34,331 35,348 40,365 C 39,371 35,378 40,384 C 35,395 37,406 42,417 C 45,417 46,430 50,432 C 52,461 59,480 68,494 C 78,510 88,524 104,528 C 120,560 186,558 266,547 C 273,558 280,566 287,574 C 298,597 316,611 338,620 C 356,636 378,647 419,631 C 458,629 489,620 499,590 C 509,589 522,584 543,574 C 558,571 570,563 581,554 C 592,562 615,558 638,554 C 674,552 699,547 711,537 C 728,532 745,527 758,517 C 788,527 816,531 839,517 C 906,524 959,510 973,438 C 984,426 981,408 976,390 C 987,372 972,357 957,341 C 955,320 945,305 930,292 C 932,278 927,266 907,256 C 899,232 885,217 868,206 C 868,181 847,165 816,153 C 792,124 762,103 727,88 C 713,77 699,76 685,78 C 669,58 641,53 603,60 C 593,53 582,53 572,53 C 549,51 529,50 512,50 C 483,44 459,48 436,56 z "
   class="fil5 str1" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2673"
   d="M 149,168 C 138,178 138,185 145,189"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2675"
   d="M 178,155 C 227,121 263,118 288,135"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2677"
   d="M 254,184 C 273,170 281,143 296,124 C 316,94 354,119 378,117"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2679"
   d="M 129,215 C 117,229 132,241 132,254"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2681"
   d="M 91,256 C 108,247 104,227 120,213 C 131,199 167,198 180,179 C 194,158 212,151 233,155"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2683"
   d="M 217,174 C 228,163 236,152 243,141"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2685"
   d="M 285,176 C 296,168 301,158 300,147"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2687"
   d="M 274,108 C 282,111 293,109 310,97"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2689"
   d="M 297,93 C 293,98 290,103 290,107"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2691"
   d="M 341,77 C 343,81 346.84515,84 349.84515,84"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2693"
   d="M 369,65 C 365,70 362,74 360,78"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2695"
   d="M 457,64 C 449,65 441,63 433,56"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2697"
   d="M 471,124 C 461,122 453,118 457,95 C 458,75 442,69 414,71 C 388,73 364,75 353,81 C 344,90 334,99 322,109"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2699"
   d="M 357,89 C 350,96 348.26013,104.78038 350.26013,112.78038"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2701"
   d="M 431,82 C 421,99 407,114 397,123 C 376,145 363.05644,169.84515 385.05644,195.84515"
   class="fil5 str0"
   sodipodi:nodetypes="ccc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2703"
   d="M 373.05644,169 C 362.05644,170 353,163 346,153 C 341,143 327,143 321,124"
   class="fil5 str0"
   sodipodi:nodetypes="ccc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2705"
   d="M 454,129 C 405,131 406,162 382,173"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2707"
   d="M 486,180.081 C 490.26013,161.73987 479,156 454,157 C 442,158 430,158 421,153"
   class="fil5 str0"
   sodipodi:nodetypes="ccc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2709"
   d="M 461,182 C 435,191 410,194 384,196 C 372,195 355,234 353,247"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2711"
   d="M 48,324 C 55,313 62,307 71,304"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2713"
   d="M 71,311 C 67,294 98,289 107,279 C 113,274 118,255 149,248 C 166,242 180,224 200,206 C 208,197 224.05644,193 241.05644,192"
   class="fil5 str0"
   sodipodi:nodetypes="ccccc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2715"
   d="M 211,167 C 202,179 195,194 205,201"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2717"
   d="M 169,235.15485 C 167,247.15485 167,260 168,271"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2719"
   d="M 199,257 C 192,268 180,281 185,296"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2721"
   d="M 175,292 C 193,297 203,315 216,320"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2723"
   d="M 184.52025,283.30063 C 178.52025,273.30063 169,267 157,276 C 140,286 124,297 107,307 C 91,321 86.211287,335.84515 93.211287,349.84515"
   class="fil5 str0"
   sodipodi:nodetypes="cccc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2725"
   d="M 49,352 C 62,337 76,330 90,331"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2727"
   d="M 71,335 C 68,332 63,331 57,330"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2729"
   d="M 103,319 C 127,306 139,309 143,322 C 153,376 166.13862,383.13862 181.13862,397.13862"
   class="fil5 str0"
   sodipodi:nodetypes="ccc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2731"
   d="M 156,299 C 152,303 146,309 140,316"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2733"
   d="M 206,268 C 224,252 249,235 202,219"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2735"
   d="M 229,242 C 258,241 274,247 275,263 C 276,274 269,285 270,297"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2737"
   d="M 350,386 C 375,362 390,340 373,302 C 367,283 360,265 353,247 C 322,247 295,252 275,262"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2739"
   d="M 323,276 C 308,290 276,299 278,324 C 279,371 296,381 307,392 C 311,395 315,407 325,419"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2741"
   d="M 256,149 C 251,168 230,188 249,210 C 256,205 275,205 284,203 C 300,193 343,210 360,198"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2743"
   d="M 436,269 C 444,239 429,221 400,212"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2745"
   d="M 453,346 C 439,344 409,323 413,302 C 410,277 395,268 394,258 C 392,253 399,241 393,234"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2747"
   d="M 308,393 C 316,380 316,368 296,354"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2749"
   d="M 243,275 C 244,289 245.26013,302.78038 251.26013,316.78038"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2751"
   d="M 278,324 C 262,319 249,312 244,322 C 239,326 225,332 229,350 C 228,358 199,362 188,367"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2753"
   d="M 209,369 C 200,376 203,390 199,400 C 201,421 225,425 250,428"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2755"
   d="M 96,366 C 102,372 113,377 137,380 C 147,382 146,389 169,396 C 178,397 189,398 199,400"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2757"
   d="M 111,336 C 105,342 92,347 91,355 C 89,363 83,371 78,379 C 70,394 65,406 66,416 C 67,437 90,448 102,461"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2759"
   d="M 47,371 C 44,369 42,367 40,365"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2761"
   d="M 70,362 C 63,369 56,376 51,385 C 47,396 48,405 46,424"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2763"
   d="M 50.739874,385.43924 C 50.739874,382.43924 49,382 47,380"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2765"
   d="M 51,432 C 53,426 62,420 57,413"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2767"
   d="M 70,495 C 72,491 71,486 73,484"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2769"
   d="M 104,528 C 110,518 111,512 107,511"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2771"
   d="M 114,515 L 107.9595,511.47975"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2773"
   d="M 87,449 C 77,469 88,483 115,492"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2775"
   d="M 84,394 C 106,406 129,431 149,438 C 171,446 202.21962,474 221.21962,461"
   class="fil5 str0"
   sodipodi:nodetypes="ccc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2777"
   d="M 250,446 C 235,449 217,461 217,469 C 218,483 264.34113,492.47975 282.34113,488.47975"
   class="fil5 str0"
   sodipodi:nodetypes="ccc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2779"
   d="M 104,471 C 111,477 121,479 140,470 C 160,464 168.26772,471 182.26772,475"
   class="fil5 str0"
   sodipodi:nodetypes="ccc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2781"
   d="M 219,473 C 195,471 183,472 175,480 C 161,489 147,487 142,488 C 136,490 119,507 95,495"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2783"
   d="M 154,547 C 187,549 222,548 258,543"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2785"
   d="M 192,507 C 184,505 180,501 180,494 C 179,508 171,511 165,517 C 158,522 159,530 153,537"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2787"
   d="M 228,488 C 208,488 189,487 175,480"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2789"
   d="M 217,488 C 220,505 243,507 255,513"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2791"
   d="M 209,503 C 211,499 217,499 221,496"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2793"
   d="M 237,500 C 242,496 248.78038,492.9595 252.78038,487.9595"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2795"
   d="M 266,501 C 257,486 285,481 292,465"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2797"
   d="M 264,406 C 280,419 294.67599,423.39875 308.67599,427.39875"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2799"
   d="M 249,468 C 278,468 304,449 309,427 C 310,425 317,424 321,423"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2801"
   d="M 498,63 C 503,58 510,53 521,50"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2803"
   d="M 516,73 C 490,73 468,77 457,96"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2805"
   d="M 489,91 C 495,95 498.73987,100.30063 498.73987,105.30063"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2807"
   d="M 776,364 C 780,318 691,305 647,381 C 641,397 587,391 559,399 C 534,409 509,423 484,438 C 474,454 439,428 419,430 C 354,437 353,534 417,550"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2809"
   d="M 536,327 C 537,347 515,386 548,404"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2811"
   d="M 475,369 C 486,365 489,348 496,339"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2813"
   d="M 453,394 C 448,405 454,409 465,410"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2815"
   d="M 495,581 C 534,546 528,483 467,487 C 446,489 431,484 421,474"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2817"
   d="M 525,473 C 539,498 553,492 570,492 C 600,491 617,461 596,429"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2819"
   d="M 546,492 C 533,496 523,502 516,510"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2821"
   d="M 493,514 C 481,518 469,531 455,540 C 443,558 426,565 417,575 C 407,590 402,621 345,604"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2823"
   d="M 494,591 C 466,607 421,593 415,600"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2825"
   d="M 567,452 C 557,449 551,435 546,428"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2827"
   d="M 392,411 C 414,423 433,420 452,405"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2829"
   d="M 418,418 C 410,430 401,435 390,434 C 378,432 361,445 341,461 C 325,474 319,488 315,503 C 312,521 309,529 305,536"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2831"
   d="M 327,442 C 325,454 329,462 337,465"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2833"
   d="M 314,587 C 304,584 292,574 284,571"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2835"
   d="M 356,542 C 318,560 310,588 339,621"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2837"
   d="M 333,503 C 331,516 340,525 349,533 C 357,537 357,548 359,551 C 371,568 373,579 374,589"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2839"
   d="M 611,358 C 625,342 650,355 669,353"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2841"
   d="M 562,373 C 575.94164,359.35941 581.42706,345.874 570.87401,326.66047"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2843"
   d="M 586,365 C 582,362 578,359 575,355"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2845"
   d="M 581,554 C 577,544 580,534 590,525"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2847"
   d="M 562,548 C 565,543 573.9595,542.26013 579.9595,539.26013"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2849"
   d="M 639,509 C 636,528 649,537 677,538"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2851"
   d="M 630,540 C 635,520 622,501 596,482"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2853"
   d="M 631,528 C 634,526 637,524 640,522"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2855"
   d="M 683,467 C 668,464 656,458 656,442 C 653,428 635,414 643,386"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2857"
   d="M 612,480 C 624,492 648,477 670,477 C 724,475 738,504 712,536"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2859"
   d="M 724,512 C 750,511 768,501 779,480"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2861"
   d="M 758,518 L 749,508"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2863"
   d="M 798,506 C 814,506 828,509 839,518"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2865"
   d="M 830,500 C 825,503 818.9595,505.26013 813.9595,507.26013"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2867"
   d="M 856,507 C 853,490 864,482 865,472"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2869"
   d="M 675,403 C 683,410 693,416 691,424 C 694,441 715,443 727,445 C 751,455 773,466 760,486"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2871"
   d="M 549,310 C 536,306 522.9595,295.919 510.9595,281.919"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2873"
   d="M 588,152 C 579,158 569,170 555,179 C 541,187 526,194 519,219 C 517,241 519,256 514,270 C 510,283 508,295 514,304"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2875"
   d="M 524,140 C 557,148 568,158.52025 565,171.52025"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2877"
   d="M 727,434 C 733,424 733,415 733,405 C 743,389 797,411 804,366"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2879"
   d="M 728,364 C 733,375 734,389 733,405"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2881"
   d="M 512,183 C 518,192 521,201 523,209"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2883"
   d="M 791,478 C 807,454 807,419.3097 836,409.3097"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2885"
   d="M 752.73987,458.0405 C 754.73987,452.0405 758,446 761,442"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2887"
   d="M 803,329 C 796,325 793,318 796,306"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2889"
   d="M 773,346 C 781,341 788,331 795,318"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2891"
   d="M 815,269 C 816,294 837.2427,297.69894 833.2427,325.69894"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2893"
   d="M 762,322 C 763,295 777,279 794,265 C 804,254 816,248 809,213 C 813,192 838,169 816,154 C 790,142 768,118 728,117"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2895"
   d="M 546,288 C 558,267 593,255 596,247 C 604,226 598,205 599,185 C 605,168 621,161 639,156 C 667,124 698.18283,120.78855 729.18283,144.78855"
   class="fil5 str0"
   sodipodi:nodetypes="ccccc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2897"
   d="M 600,220 C 596,215 591,212 586,209"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2899"
   d="M 593.69937,250 C 602.69937,245 612,243 621,244"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2901"
   d="M 505,116 C 556,121 620,129 624,161"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2903"
   d="M 629,123 C 622,113 605,108 597,101"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2905"
   d="M 597,77 C 604,89 608,100 615,112"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2907"
   d="M 603,60 C 615,77 638.78855,77.211448 639,101.57711"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2909"
   d="M 634,85 C 636,82 638,80 640,77"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2911"
   d="M 674,131 C 662,102 636,103 623,96"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2913"
   d="M 659,100 C 675,106 683,116 683,129"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2915"
   d="M 635,67 C 655,72 672,80 686,94"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2917"
   d="M 671,106 C 676,93 699,90 728,89"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2919"
   d="M 719,155 C 728,132 779,142 808,164"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2921"
   d="M 625,180 C 641,172 660.63386,170.21129 679.63386,181.21129"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2923"
   d="M 695,140 C 680,155 666,170 685,187 C 720,221 741,240 711,270"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2925"
   d="M 782,162 C 791,175 791,190 785,204"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2927"
   d="M 727,201 C 741,210 749,224 751,243 C 761,290 748,301 734,311"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2929"
   d="M 641,293 C 671,300 693,301 698,285"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2931"
   d="M 673.36614,297.78872 C 680.36614,298.78872 688,302 693,306"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2933"
   d="M 732,327 C 743,312 732.63387,304 686.63387,296"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2935"
   d="M 740,213 C 757,200 760,179 770,162"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2937"
   d="M 809,214 C 830,212 846,220 859,237"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2939"
   d="M 841,199 C 847,201 857,204 869,207"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2941"
   d="M 912,290 C 898,295 889,306 884,321 C 871,331 864,346 860,362"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2943"
   d="M 962,422 C 969,425 973,430 973,438"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2945"
   d="M 941,328 C 937,333 932,335 925,336 C 916,344 910,353 910,364 C 917,381 918,394 914,405"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2947"
   d="M 913,351.0405 C 913,345.0405 911,337 906,331"
   class="fil5 str0"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2949"
   d="M 937,403 C 943,394 947,384 947,369 C 948,357 951,347 956,341"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2951"
   d="M 947,378 C 957,379 960,385 959,393 C 966,399 969,408 972,416"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2953"
   d="M 677,197 C 668,215 652,232 650,251 C 634,286 579,283 566,310"
   class="fil5 str0" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2955"
   d="M 771,522 C 733,536 689.9595,552 656.9595,583"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2957"
   d="M 663,571 C 675,562 687,553 699,544"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2959"
   d="M 788,526 C 754,537 718,551 684,569"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2961"
   d="M 811,527 C 759,544 700.69937,568 649.69937,592"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2963"
   d="M 889,523 C 845,537 666,600 647,600 M 644.43925,596 C 719.43925,565 801,541 877,519"
   class="fil5 str2"
   sodipodi:nodetypes="cccc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2965"
   d="M 891,544 C 845,561 695.86138,599.21962 659.86138,603.21962 C 738.86138,577.21962 813,557 890,533"
   class="fil5 str2"
   sodipodi:nodetypes="ccc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2983"
   d="M 669,552 C 657,604 629,608 597,599 C 584,589 571,589 558,589"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2985"
   d="M 644.78038,595.919 C 653.78038,580.919 657,569 659,554"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2987"
   d="M 635,601 C 644,589 649,573 651,554"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2989"
   d="M 623,603 C 637,591 642,575 641,554"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2991"
   d="M 616,602 C 626,589 633,574 634,556"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2993"
   d="M 607,602 C 617,589 625,574 629,557"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2995"
   d="M 600,600 L 623,558"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2997"
   d="M 594,598 C 600,585 605.30063,567.919 613.30063,557.919"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path2999"
   d="M 590,594 C 595,583 597,570 601,560"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3001"
   d="M 585,593 C 586,581 589,570 592,559"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3003"
   d="M 579,591 L 583,556"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3005"
   d="M 575,590 C 573,581 572,570.17912 572,561.17912"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3007"
   d="M 567,589 C 563,582 563,573.43925 564,566.43925"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3009"
   d="M 561,589 L 557,571"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3011"
   d="M 588,593 C 586,604 591,613 600,621"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3013"
   d="M 578,591 C 576,605 581.0405,619.52025 593.0405,628.52025"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3015"
   d="M 564,590 C 567,609 576,624 590,633"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3017"
   d="M 590,633 C 599,623 607,611 616,603"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3019"
   d="M 869,551 C 841,580 804,604 758,623 C 719,620 678.9595,606.73987 639.9595,598.73987"
   class="fil5 str2"
   sodipodi:nodetypes="ccc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3021"
   d="M 675.69937,600.73987 C 707.69937,605.73987 740,611 772,617"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3023"
   d="M 786,610 C 757,605 727.43925,599.73987 699.43925,595.73987"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3025"
   d="M 725.9595,589.73987 C 750.9595,593.73987 773,597 797,604"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3027"
   d="M 746,585 C 768,585 789,590 808,598"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3029"
   d="M 774,578 C 789,580 805,584 820,591"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3031"
   d="M 832,583 C 823,582 808.61837,583 798.61837,583"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3033"
   d="M 843,574 C 823,578 805,578 790,574"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3035"
   d="M 804,570 C 813,572 832,570 851,567 C 865,563 878.78038,557.47975 891.78038,551.47975"
   class="fil5 str2"
   sodipodi:nodetypes="ccc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3037"
   d="M 593.21962,629.47975 C 627.21962,653.47975 674.05762,670.47975 733.05762,675.47975"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3039"
   d="M 597,624 C 638,655 692.17912,665.73987 754.17912,669.73987"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3041"
   d="M 601,621 C 667,660 724.82088,667.47975 776.82088,658.47975"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3043"
   d="M 604,616 C 669,652 731.60125,660.47975 788.60125,652.47975"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3045"
   d="M 608,611 C 678,645 738.919,654 798.919,647"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3047"
   d="M 613,607 C 676,638 742,648 811,641"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3049"
   d="M 624,603 C 691,635 756.78038,636 821.78038,634"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3051"
   d="M 758,623 C 765,632 790,632 829,626"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3053"
   d="M 770,618 C 776,627 805.30063,623.73987 840.30063,618.73987"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3055"
   d="M 788,610 C 801,614 834,606 871,596"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3057"
   d="M 777,615 C 786,621 820,616 857,608"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3059"
   d="M 886.30063,578.47975 C 845.30063,596.47975 813,607 797,605"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3061"
   d="M 808,598 C 830,597 860.0405,584.21962 889.0405,572.21962"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3063"
   d="M 822,590 C 844,585 867,576 890,566"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3065"
   d="M 891,558 C 873,567 855,574 836,580"
   class="fil5 str2" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3067"
   d="M 634,601 C 679,617 727,626.47975 774,629.47975"
   class="fil5 str2"
   sodipodi:nodetypes="cc" /><path
   style="fill:#000000"
   id="path3069"
   d="M 884,320 C 882,290 835,243 807,252 C 830,236 890,275 884,320 z "
   class="fil6" /><path
   style="fill:#000000"
   id="path3071"
   d="M 264,547 C 260,519 273,494 294,473 C 317,455 312,429 322,421 C 336,394 373,377 425,368 C 441,349 462,339 491,340 C 511,323 529,307 566,307 C 568,316 571,325 575,333 C 571,328 565,322 561,315 C 528,312 505,331 492,347 C 469,342 449,349 430,371 C 377,381 339,397 326,424 C 319,448 311,468 296,476 C 279,494 264,520 274,558 C 271,555 268,550 264,547 z "
   class="fil6" /><path
   style="fill:#000000"
   id="path3073"
   d="M 567,54 C 558,60 562,75 556,86 C 508,89 481,107 490,140 C 501,153 503,162 496,168 C 482,176 477,197 472,220 C 462,233 456,254 456,276 C 455,295 427,306 431,322 C 433,322 434,322 435,322 C 435,315 439,308 446,302 C 455,297 459,285 462,269 C 461,255 465,241 476,226 C 481,207 483,179 503,170 C 515,165 508,152 497,136 C 484,104 519,96 556,91 C 571,87 567,63 577,55 C 574,54 570,54 567,54 z "
   class="fil6" /><path
   style="fill:none;stroke:#000000;stroke-width:2"
   id="path3075"
   d="M 530,160 C 521,157 513,158 506,164"
   class="fil5 str0" /><path
   style="fill:#000000"
   id="path3091"
   d="M 903,251 C 896,259 888,268 880,276 C 887,276 896,271 908,256 L 903,251 z "
   class="fil6" /><path
   style="fill:#000000"
   id="path3093"
   d="M 881,277 C 864,291 847,306 835,321 C 826,333 825,350 828,369 C 830,383 832,397 835,410 C 839,410 842,410 846,411 C 862,427 902,424 914,430 C 921,440 927,447 931,445 C 938,452 943,460 946,468 C 943,458 949,458 928,434 C 919,425 898,420 865,415 C 842,407 837,393 835,375 C 831,358 829,342 835,325 C 848,309 864,293 881,277 z "
   class="fil6" /><path
   style="fill:none;stroke:#000000;stroke-width:2;stroke-dasharray:5, 7"
   id="path3099"
   d="M 567,312 L 830,353"
   class="fil5 str3" /><path
   style="fill:#000000"
   id="path3101"
   d="M 838,407 C 841,430 849,451 866,467 C 900,468 921,487 951,488 L 944,495 C 930,496 917,484 904,482 C 893,478 871,477 861,472 C 846,451 837,429 838,407 z "
   class="fil6" /><path
   style="fill:none;stroke:#000000;stroke-width:2;stroke-dasharray:5, 7"
   id="path3103"
   d="M 432,319 L 455,349"
   class="fil5 str3" />
</svg>
  
</div>
<!--end of brain svg-->
  <div class="profilesectiondiv" id="profileid">
    <section class="sectiontitle">
      @foreach($contact_information as $contact_information)				
      <p><a href="mailto:{{$contact_information['email']}}" title="Email"><i class="fa fa-envelope" aria-hidden="true"></i></a></p>
      <p><a href="{{$contact_information['website']}}" title="Website"><i class="fa fa-globe" aria-hidden="true"></i></a></p>
      <p><a href="{{$contact_information['linkedin_link']}}" title="LinkedIn"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></p>
      <p><a href="{{$contact_information['github_link']}}" title="Github"><i class="fa fa-github" aria-hidden="true"></i></a></p>
      <p><a href="https://twitter.com/{{$contact_information['twitter']}}" title="Twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></p>
      @endforeach
    </section>
 </div>
        <div class="skillssectiondiv" id="techskills">
      <section class="sectiontitle">
        <h3 id="techskillsh3id">SKILLS</h3>
        <div>
           @foreach($skill as $skill)
            <h2>Name:{{$skill['skill_name']}}</h2>
						<h3>Percentage:{{$skill['skill_percentage']}}</h3>
            @endforeach
        </div>
        </section>
    </div>
    
    <div class="educationsectiondiv sectiontitle">
  <h3 id="educationsectionh3id">EDUCATION</h3>
  <section class="timeline">
    <ul>
      @foreach ($educationData as $education)
        <li>
          <div>
            <time>{{$education['edu_end_date']}}</time>
            {{$education['degree_title']}},
            {{$education['institute']}}
          </div>
        </li>
      @endforeach
    </ul>
  </section>
</div>

  </div>
    
<div class="experience">
  <h3>Experience</h3>
  
  <div class="jobholder">
    @foreach($experience as $job)
    <div class="job1">
      <p class="jobyear">{{$job['job_start_date']}} - {{$job['job_end_date']}}: {{$job['job_title']}} / {{$job['organization']}}</p>
      <button class="roledetails1">Details</button>
      <ul class="listeddetails1">
        <li>{{$job['job_description']}}</li>
      </ul>
    </div>
    @endforeach
  </div>
</div>

<div class="hobbiessectiondiv">      
  <section class="sectiontitle"><h3 id="hobbiessectionh3id">Hobbies & Interests</h3>
  @foreach($interest as $interest)
    <p>{{$interest['interest']}} </p>
    @endforeach
  </section>
</div>

      <section id="Languages">
        <div class="sectionTitle">
          <h1>Languages</h1>
        </div>

        @foreach($languages as $languages)
        <div class="sectionContent">
          <article>
            <h2>{{$languages['language']}}</h2>
            <h3>{{$languages['language_level']}}</h3>
          </article>
        
        </div> 
            @endforeach         
        <div class="clear"></div>
      </section>
<section class="sectiontitle socialmedia">
  <div>
  <h3>Social</h3>
   @foreach($projects as $project)
                   Title: {{ $project['project_title'] }}
                   Description: {{ $project['project_description'] }}
                    @endforeach
</section>
 </div>
</div>
<div> 
</div>
  </div>
  <!--end of main content-->  
<div class="copyrightetal">
  <p>&copy; 2018 </p>
</div>
  </div></div>
  </body>
</html>

<style>
    body{
  text-align: center;
  font-family: Brown;
  padding: 0;
  margin: 0;
}

.container{
  width: 90%;
  margin-left: 5%;
}

.page-header, nav, .main-content{
  margin-left:;
}

h1{
  margin-top:;
  font-family: aharoni;
  font-size: 3.60em;
  color: #222;
  letter-spacing: 15px;
  text-align: center;
}

#h1ptag{
  font-style: italic;
  font-size: 1.05em;
  line-height: 25px;
  margin-top: 0.1%;
  padding: 5px;
}

ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
}

/*nav menu styling*/
nav ul{
  list-style-type: none;
  margin: 0;
  padding:0;
  overflow: hidden;
  text-align: center;
  transition: max-height 0.2s;
}

nav ul li{
  /*float: left;*/
  display: inline-block;
  text-transform: uppercase;
  font-family: 'Open Sans';
  padding: 20px;
}

.nav-item a:hover{
  color: #333;
  font-weight: 300;
/*border-bottom: 1px solid #c3c3c3;*/
}

nav ul li a:link,
nav ul li a:visited{
  display: block;
  font-size: .90em;
  padding: 10px 20px 0 0;
  color: #009688;
  text-decoration: none;
  font-weight: 500;
  letter-spacing: 2px;
}

/*hide button on large screens*/

.handle{
  display: none;
}

.main-content{
  /*background-color: #eee*/
  background-color: #009688;
  
  line-height: 20px;
  color: #fff;
  font-family: 'Open Sans', sans-serif;
}

div .svgbrain svg{
  margin: 2%;
}

h3{
  /*color: #3c948b;*/
  font-weight: 900;
  font-size: 2.0em;
  padding: 40px;
  letter-spacing: 10px;
  font-family: calibri;
  text-transform: uppercase;
}

section{
  width: 70%;
  margin-left: 15%;
  margin-bottom: 10px;
}

p{
  font-family: calibri light;
  font-size: 1.1em;
  padding: 2px;  
  line-height: 25px;
}

span{
  height: 100px;
  width: 100px;
  border-radius: 80%;
  background-color: #fff;
  display: inline-block;
  margin:5%;
  margin-top: 5%;
  z-index: -1;
  text-align: center;
  color: #333;
}

/*% charts*/
.firstchart, .secondchart, .thirdchart{
  display: inline-block;
  margin: 5%;
}

.level{
  font-style: bold;
  letter-spacing: 3px;
}

circle{
  fill: transparent;
}

/*first circle*/
#outerc1{  
  fill: transparent;
  stroke: #fff;
  stroke-width: 5;
  stroke-dasharray: 0 190 0;
  stroke-linecap: "round";
} 

#outerc1:hover{
  animation: beginner 3s ease-in-out infinite;
}

@keyframes beginner{
  0%{stroke-dasharray: 0;}
  100%{stroke-dasharray: 0 190 0;}
}

#innerc1{
  fill: transparent;
  stroke: #655;
  stroke-width: 1;
}

/*end of first circle*/

/*start of second circle*/
#outerc2{  
  fill: transparent;
  stroke: #fff;
  stroke-width: 5;
  stroke-dasharray: 100 100;
  stroke-linecap: "round";
} 

#outerc2:hover{
  animation: pro 3s ease-in-out infinite;
}

@keyframes pro{
  0%{stroke-dasharray: 0;}
  100%{stroke-dasharray: 100 100;}
}

#innerc2{
  fill: transparent;
  stroke: #655;
  stroke-width: 1;
}
/*end of second chart*/

/*start of 3rd circle*/
#outerc3{  
  fill: transparent;
  stroke: #fff;
  stroke-width: 5;
  stroke-dasharray: 185 0;
  stroke-linecap: "round";
} 

#outerc3:hover{
  animation: expert 5s ease-in-out infinite;
}

@keyframes expert{
  0%{stroke-dasharray: 0 180;}
  100%{stroke-dasharray: 180 0;}
}

#innerc3{
  fill: transparent;
  stroke: #655;
  stroke-width: 1;
}
/*end of third chart*/

/*end of charts*/

/*svgbrain*/
#path2659, #path2661{
  animation: opacity 10s ease infinite;
}

@keyframes opacity{
  0%{opacity: 0;}
  100%{opacity: 1;}
}

#path2661{
  animation: topleft 12s 3s ease infinite;
}

@keyframes topleft{
  0%{opacity: 0;}
  100%{opacity: 1;}
}

#path2667{
  animation: bottomleft 20s 1s ease infinite;
}

@keyframes bottomleft{
  0%{opacity: 0;}
  100%{opacity: 1;}
}

#path19{
  animation: outerright 10s 3s linear infinite;
}

@keyframes outerright{
  0%{opacity: 0;}
  100%{opacity: 4;}
  }
}

#path2671{
  animation: outline 20s 1s linear infinite;
}

@keyframes outline{
  0%{stroke-width: 0;}
  50%{stroke-width: 2;}
  100%{stroke-width: 4;}
  }


/*end of svg brain*/
/*timeline*/
.timeline ul li {
  list-style-type: none;
  position: relative;
  width: 4px;
  margin: 0 auto;
  padding-top: 50px;
  background: #eee;
  color: #fff;
}

.timeline ul li::after {
  content: '';
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  width: 5px;
  height: 5px;
  border-radius: 50%;
}

div time{
  positiion: relative;
  right: 110%;
}

.timeline ul li div {
  position: relative;
  bottom: 0;
  width: 150px;
  padding: 15px;
  border: .5px solid #eee;
  border-radius: 5px;
  background:transparent;
}

.timeline ul li div:hover {
  background-color: #fff;
  color: #009688;
}
 
.timeline ul li div::before {
  content: '';
  position: absolute;
  bottom: 7px;
  width: 0;
  height: 0;
  border-style: solid;
}

.timeline ul li:nth-child(odd) div {
  left: 15px;
}
 
.timeline ul li:nth-child(odd) div::before {
  left: -15px;
  border-width: 8px 16px 8px 0;
  border-color: transparent #eee transparent transparent;
}

.timeline ul li:nth-child(even) div {
  left: -195px;
}
 
.timeline ul li:nth-child(even) div::before {
  right: -15px;
  border-width: 8px 0 8px 16px;
  border-color: transparent #eee transparent ;
}

/*employment section*/
ul li{
  list-style-type: none;
}

.jobyear, .employer{
  font-size: 1em;
}

.jobholder button{
  border: 1px solid #fff;
  border-radius: 5px;
  background: #fff;
  color: #009688;
  width: 20%;
}

/*social*/
.social{
  display: inline-block;
  margin-left: 1%;
  margin-bottom: 45px;
}

img{
  width:58px;
  height:55px;
  opacity: .6;
  border: 1px solid #fff;
  border-radius: 100%;
}

img:hover{
  background-color: #fff;
  border: 1px solid #fff;
  border-radius: 100%;
}

#behance{
  width: 58px;
  height: 55px; 
}

.copyrightetal{
  font-size: 12px;
  font-family: calibri;
  margin-top: 2%;
}
/*display nav items one block form with bottom border*/
@media screen and (max-width: 580px){
    
  nav ul{
    max-height: 0;
    text-align: center;
  }
  
  .showing{
    max-height: 50em;
  }
  
  .handle{
    display: block;
    padding: 10px;
    border-radius: 1px; 
    color: #fff;
    font-family: aharoni;
    letter-spacing: 5px;
    font-weight: 500;
    background-color: #009688;
    opacity: .7;
    text-align: center;
    font-size: 1.9em;
    cursor: pointer;
    line-height: 95px;
    box-sizing: border-box;
    margin-top: 2%;
  }
  
  .handle:hover{
    background-color: #444;
  }
  
 nav ul li{
    display: block;
  /*float:none;*//*alternative***************************************/
    border-bottom: 1px solid #fff;
   width: 100%;
   box-sizing: border-box;
  }
  
  nav ul li:hover{
    background-color: #d1d1d1;
    border-bottom: none;
  }
  
  a{
    color: #fff;
  }
  
  
  #hobbiessectionh3id{
    margin-left: -10%;
    margin-bottom: -20px;
    line-height: .7em;
  }
}
</style>
<script>
    $('.handle').on('click', function(){
  $('nav ul').toggleClass('showing');
});

$(document).ready(function(){
      $(".roledetails1").click(function(){
           $(".listeddetails1").toggle();
      });
});

$(document).ready(function(){
      $(".roledetails2").click(function(){
           $(".listeddetails2").toggle();
      });
});

$(document).ready(function(){
      $(".roledetails3").click(function(){
           $(".listeddetails3").toggle();
      });
});
<script>