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
                                                <button type="button" class="btn btn-primary"><a href="/account/cv/create" style="color:white;">Create CV</a></button>
                                                  <div class="container-fluid wrapper">
    <div class="row">
        @foreach($personal_information as $info)
        <div class="col-md-12">
            <div class="card my-4">
                <div class="card-body">
                    <h3>{{ $info['first_name'] }} {{ $info['last_name'] }}</h3>
                    <h5>{{ $info['profile_title'] }}</h5>
                    <p>{{ $info['about_me'] }}</p>
                </div>
                <div class="card-footer">
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('destroy', $info['id']) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mr-2">Delete CV</button>
            </form>
        </div>
        <div class="col">
            <button class="btn btn-primary mr-2">
                <a href="/account/cv/edit/{{ $info['id']}}" style="color:white;">Edit CV</a>
            </button>
        </div>
        <div class="col">
            <button class="btn btn-success">
                <a href="/account/cv/download-cv/{{ $info['id']}}" style="color:white;">Download CV</a>
            </button>
        </div>
           <div class="col">
            <button class="btn btn-primary mr-2">
                <a href="/getNLP" style="color:white;">Job Portal</a>
            </button>
        </div>
    </div>
</div>

            </div>
        </div>
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
               </section>
               </body>

               </html> @include('inc.footer')