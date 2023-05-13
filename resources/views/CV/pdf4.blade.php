<div id="page">
  <header>
    <h1>
      <span>{{ header.firstName }}</span>
      {{ header.lastName }}
    </h1>
    <h2>{{ header.title }}</h2>
    <div>
      <a
        v-for="contact in header.contact"
        href="contact.link"
      >
        <i :class="['fa', contact.icon]"></i>
        {{ contact.title }}
      </a>
    </div>
  </header>

  <section v-for="section in sections">
    <h2>{{ section.title }}</h2>
    <div v-for="sub in section.subsections">
      <div class="header">
        <h3>{{ sub.title }}</h3>
        <h4>{{ sub.subtitle }}</h4>
      </div>
      <aside>
        <span>{{ sub.location }}</span>
        <span>{{ sub.date }}</span>
      </aside>
      <template v-for="content in sub.content">
        <p v-if="typeof content === 'string'">
          {{ content }}
        </p>
        <table
          v-else
          :class="{ subtable: sub.content.length > 1 }"
        >
          <tr v-for="row in content">
            <th>{{ row[0] }}</th>
            <td v-for="cell in row.slice(1)">
              {{ cell }}
            </td>
          </tr>
        </table>
      </template>
    </div>
  </section>

  <style>
    $c-border: #ccc;
$f-primary: 'Roboto', sans-serif;
$f-secondary: 'Quattrocento', serif;
$f-base: 14px;
$f-xs: 0.7rem;
$f-sm: 0.8rem;
$f-md: 1rem;
$f-lg: 1.1rem;
$f-xl: 2.6rem;

// Light mode
// $c-primary: #037cb7;
// $c-font: #222;
// $c-bg: #fff;

// Dark Mode
$c-primary: #53c6ff;
$c-font: #fff;
$c-bg: #21212d;

body {
  max-width: 60rem;
  margin: 0 auto;
  background: $c-bg;
  color: $c-font;
  font-family: $f-primary;
  font-size: $f-base;
  padding: 2rem;
  line-height: 1.2em;
}

header {
  text-align: center;
  
  h1 {
    font-size: $f-xl;
    margin-bottom: 0.4em;
    
    span {
      font-weight: 100;
    }
  }
  
  h2 {
    margin: 4px;
    color: $c-primary;
    font-size: $f-lg;
    font-weight: 600;
    font-family: $f-secondary;
  }
  
  a {
    color: $c-font;
    font-size: $f-md;
    font-weight: 300;
    text-decoration: none;
    line-height: 1.3rem;
    
    i {
      padding: 0 0.2rem 0 0.6rem;
    }
  }
}

section {
  & > div {
    display: flex;
    flex-wrap: wrap;
  }
  
  .header, aside {
    width: 50%;
  }
  
  aside {
    padding-top: 1rem;
    text-align: right;
    font-style: italic;
    
    span {
      display: block;
      
      &:first-child {
        color: $c-primary;
      }
    }
  }
  
  h2 {
    margin: 1.5rem 0 -0.4rem;
    font-size: $f-lg;
    font-weight: 600;
    color: $c-primary;
    font-family: $f-secondary;
  }
  
  h3 {
    margin: 1rem 0 0;
    font-size: $f-md;
    font-weight: 900;
    font-family: $f-secondary;
  }
  
  h4 {
    margin: 0;
    font-size: $f-xs;
    font-family: $f-secondary;
    text-transform: uppercase;
    
    &:first-letter {
      font-size: $f-sm;
    }
  }
  
  p {
    position: relative;
    width: 100%;
    padding-left: 0.8rem;
    margin: 0.3rem 0 0;
    
    &:after {
      content: '';
      position: absolute;
      left: 0.2rem;
      top: 0.4rem;
      background-color: $c-font;
      border-radius: 100%;
      padding: 0.1rem;
    }
  }
  
  table {
    th {
      text-align: right;
      white-space: nowrap;
      font-weight: bold;
      font-family: $f-secondary;
    }
    
    th, td {
      vertical-align: top;
      padding: 0.1rem 0.4rem;
    }
    
    &.subtable {
      margin: 0.5rem 4rem 0.5rem 2rem;
      
      th {
        font-family: $f-primary;
      }
    }
  }
}
</style>
<script>
    new Vue({
  el: '#page',
  data: {
    header: {
      firstName: "Niall",
      lastName: "Ainsworth",
      title: "B.Sc. Multimedia, Mobile & Web Development",
      contact: [
        {
          title: "niallainsworth@gmail.com",
          link: "mailto:niallainsworth@gmail.com",
          icon: "fa-envelope-o"
        },
        {
          title: "github.com/NiallAins",
          link: "https://github.com/NiallAins",
          icon: "fa-github"
        },
        {
          title: "codepen.io/NiallAins",
          link: "https://codepen.io/niallains",
          icon: "fa-codepen"
        }
      ]
    },
    sections: [
      {
        title: "Education",
        subsections: [
          {
            title: "B.Sc. in Multimedia Mobile & Web Development (1:1)",
            subtitle: "National University of Ireland, Maynooth",
            content: [
              "After earning an entrance scholarship, I studied computer science for four years before graduating in 2016 with a first class honours degree."
            ]
          }
        ]
      },
      {
        title: "Skills",
        subsections: [
          {
            content: [
              [
                [
                  "Frameworks",
                  "Angular",
                  "AngularJS",
                  "Vue",
                  "Jasmine",
                  "Laravel"
                ],
                [
                  "Frontend",
                  "JavaScript",
                  "TypeScript",
                  "ARIA",
                  "Canvas",
                  "CSS - SCSS, Flex, Grid"
                ],
                [
                  "Backend",
                  "Node",
                  "PHP",
                  "SQL"
                ]
              ]
            ]
          }
        ]
      },
      {
        title: "Experience",
        subsections: [
          {
            title: "Fidelity",
            subtitle: "Senior UX Developer",
            location: "Remote, from Dublin",
            date: "Aug 2020 - Present",
            content: [
              "Working within a User Experience Design team to develop fintech web applications",
              "Iterative development of prototypes to facilitate user testing and research",
              "Development of production ready frontend applications",
              "Emphasis on supporting internal design systems, strict accessibility requirements and cross-browser, cross-device and localised implementions"
            ]
          },
          {
            title: "Google",
            subtitle: "AdSense Technical Specialist",
            location: "Barrow Street, Dublin",
            date: "Jan 2019 - Jun 2020",
            content: [
              "I fulfilled an 18 month contract assisting with the global rollout of a new AdSense product. This task required me to adapt several different roles",
              [
                [
                  "Technical Expert",
                  "I had to quickly acquire domain expertise as I became the main point of contact for all internal and external queries on my product."
                ],
                [
                  "Data Analyst",
                  "I calculated revenue predictions in order to prioritise publishers. I also analysed our product's performance as it was continually pushed live."
                ],
                [
                  "Developer",
                  "I developed custom templates according to each publisher's requirements. I also assisted external developers with live implementations and internal developers with bug reports and feature requests."
                ]
              ],
              "Communication was an important part of my role, collecting and presenting information amoung project stakeholders with a varying knowledge bases. These included AMs, PMs, Devs, and external publisher teams. It was also necessary to create documentation and educational resources for scaled communication."
            ]
          },
          {
            title: "Xwerx",
            subtitle: "Full-Stack Developer",
            location: "The Digital Hub, Dublin",
            date: "Nov 2016 - Dec 2018",
            content: [
              "Clients ranging from small local organizations to large international companies serving millions of users.",
              "Emphasis on UXD - working closely with designers and always considering UX impact during development",
              "Extensive work optimising applications for:",
              [
                [
                  "Analytics",
                  "Integrating Google analytics and event tracking."
                ],
                [
                  "Device size",
                  "Scaling from HDTVs to tablet and mobile."
                ],
                [
                  "Accessibility",
                  "Accounting for users with visual and physical limitations."
                ],
                [
                  "Internationalisation",
                  "Ensuring apps are open for translation and localisation."
                ]
              ],
              "Important projects included working as lead UI developer on an Angular 4 enterprise application with an international user base; and developing an informative static site for a client with a reach of over a billion users."
            ]
          },
          {
            title: "SAP",
            subtitle: "Frontend Developer Internship",
            location: "City West, Dublin 24",
            date: "Feb - Sep 2015",
            content: [
              "Eight months working with an international team to develop a single-page web application in AngularJS.",
              "Divided my time between working directly on Angular development and working on maintaining both manual and automated QA testing."
            ]
          },
        ]
      },
      {
        title: "Other Work",
        subsections: [
          {
            title: "Game Development",
            content: [
              "Designed and developed an in-browser arcade game with the musical project Buckles N Son, which was released with their debut album.",
              "Currently developing a Typescript engine to power online games and applications using HTML Canvas."
            ]
          },
          {
            title: "Coaching",
            content: [
              "I have spent 5 years coaching gymnastics, teaching ages ranging from 7 to 30 and working as head coach in Dublin City University. I have also worked coaching Trapeze.",
              "Part of the organizing committee of ISTO 2016. Europe's largest student gymnastics event was held over four days in Belfast, attracting 600 competitors from 30 universities.",
              "Through these activities I have developed important communication skills, learning to convey concepts to students of varying age, background and English fluency."
            ]
          }
        ]
      }
    ]
  }
});
</script>