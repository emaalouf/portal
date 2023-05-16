<div class="page">
  <header class="cv-header">
 
    <h1 class="cv-main-title"> {{$personal_information['first_name']}}</h1>
 
   
  </header>
  <main class="cv-main">
    <article class="cv-article cv-etudes">
      <h2 class="cv-article-title">Education</h2>
      @foreach($education as $education)
      <h3 class="cv-article-deuxieme-annee">{{$education['degree_title']}}<span style="color:gray; display:block; font-weight:lighter; font-size:0.8em;">{{ $education['edu_start_date'] }} - {{ $education['edu_end_date'] }}</span></h3>
      @endforeach
    </article>

    <article class="cv-article cv-parcours">
      <h2 class="cv-article-title">Experience</h2>
      @foreach($experience as $job)
      <h3 class="cv-article-mediation">{{$job['job_title']}}<span style="color:gray; display:block; font-weight:lighter; font-size:0.8em;">Juillet - Août 2015</span></h3>
      <p>Start Date:{{$job['job_start_date']}} - End Date:{{$job['job_end_date']}}</p>
      <p>Description:{{$job['job_description']}}</p>
      @endforeach
    </article>

    <article class="cv-autre">


      <h3 class="cv-article-competences">Languages</h3>

      @foreach($languages as $language)
      <div class="skills">
   

        <br />
            <span>{{$language['language']}}</span><br />
            <span class="skill-percent">{{$language['language_level']}}</span><br />
            <br />

 
      </div>
      @endforeach

       </article>

    <article class="cv-autre">
       <h3 class="cv-article-competences">Skills</h3>


       @foreach($skills as $skill)
      <div class="skills">
   
            <span>{{$skill['skill_name']}}</span>
 
      </div>
      @endforeach



    </article>

  </main>




</div>

<style>
  @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);


body {
  font-family: Montserrat, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #4B4B4B;
  margin-top: 2em;
}

.menu {
  position: fixed;
  background-color: #080808;
  padding: 0.8em;
  top: 0;
  left: 0;
  right: 0;
}

.menu ul {
  color: white;
  padding: 0;
  margin: 0 auto;
  width: 300px;
  text-align: center;
}

.menu ul li {
  display: inline;
  margin:0.7em;
}

.menu a {
  color: #fff;
}





.page {
  width: 80vw;
  margin: 0 auto;
  background-color: #2F2F2F;
}

.cv-header {
  text-transform: uppercase;
  background-color: rgba(0,0,0,.2);
  text-align: center;
  color: rgba(0,0,0,.5);
  padding: 2em;
}

.cv-main-title {
  margin: 0;
  font-size: 7vw;
  margin-bottom: 1em;
  color: rgb(99, 171, 79);
}

.main-header h1:hover{
  color: red;
}

.cv-main-title small {
  text-transform: lowercase;
  color: rgb(240, 242, 240);
  font-size: 0.32em;
  font-weight: lighter;
}

.cv-main-title-signature {
  display: block
}

.cv-pic {
  width: 10em;
  height: auto;
  background-color: #fff;
  border: 0.8em rgb(150, 207, 134) solid;
  border-radius: 50%;
  padding: 0.8em;
  margin-bottom: -8em;
}

.cv-main {
  text-align: center;
  background-color: #eee;
  color: #333;
  padding: 1em;

}

.cv-article {
  border-bottom: 2px #333 solid;
  padding-bottom: 3em;
  margin-bottom: 3em;
}
.cv-article-title {
  text-transform: uppercase;
  margin-top: 1em;
}

.cv-etudes {
  margin-top: 6.5em;
}


article {
   margin-top: 2em;
}


h3 {
  margin: 0 auto;
}


/*compétences*/


.skills { 
  width: 50%;
  margin: 0 auto;
  padding:0;
  text-align: left;
  float: auto;
  padding-top: 0.5em;
  }

ul.skillset {
  float: center;
  width: 100%;
  }

.skill-percent { 
  float: right; 
  }

li.skill-bar {
  background-color: #7BC673;
  color: #FFF;
  font: bold 12px/23px "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
  margin-bottom: 3px;
  padding: 2px 8px;
  width: 300px; 
  -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
          border-radius: 3px;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3);
     -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3);        
  }




.cv-article-interets {
  padding-top: 2em;
}


.col {
  width: 50%;
  float: left;
}

.row {
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
}

.clear {
  both
}

li {
  list-style: none;
}

p {
  text-align: center;
}

.pratiques {
  font-weight: bolder;
}
.autres {
  font-weight: bolder;
}



.main-footer {
  background-color: rgba(0,0,0,.5);
  padding: 2em;
  color: rgb(99, 171, 79);
}

.main-footer p {
  font-size: 1em;
  font-weight: lighter;
  font-style: none;
  text-align: left;
  margin: 0;
}
.main-footer a {
  color: inherit
}
</style>
