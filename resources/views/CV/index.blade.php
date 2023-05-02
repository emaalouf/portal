               @include('inc.navbar')
               <!doctype html>
               <html lang="en">
               <section class="hero-section">
                   <div class="container">
                       <div class="row">
                           <div class="content-wrapper mt-4">
                               <div class="container-fluid">
                                   <div class="row mt-3">
                                       <div class="col-12">
                                           <div class="card mb-5">
                                               <div class="card-body">
                                                <button type="button" class="btn btn-primary"><a href="/cv/create" style="color:white;">Create CV</a></button>
                                                   <div class="container-fluid wrapper">
                                                       <div class="row">
                                                           <div>
                                                            @foreach($personal_information as $personal_information)
                                                            {{ $personal_information['first_name'] }} {{ $personal_information['last_name'] }}<br />
                                                            {{ $personal_information['profile_title'] }} {{ $personal_information['about_me'] }}
                                                            <br /><button type="button" class="btn btn-danger"><a href="/cv/destroy/{{ $personal_information['id']}}" style="color:white;">Delete CV</a></button>
                                                            <br />
                                                            <br /><button type="button" class="btn btn-primary"><a href="/cv/edit/{{ $personal_information['id']}}" style="color:white;">Edit CV</a></button>
                                                            <br />
                                                            <br /><button type="button" class="btn btn-success"><a href="/cv/download/{{ $personal_information['id']}}" style="color:white;">Download CV</a></button>

                                                            @endforeach
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>
               </body>

               </html> @include('inc.footer')