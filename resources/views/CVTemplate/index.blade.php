<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CV Creator</title>
</head>
<body>

@include('inc.navbar')

<main>

    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">

                    <h2 class="mb-0">Create a professional CV</h2>
                    <p style="color: rgb(15, 11, 5);">Fill in the blanks, choose a template and download your CV in minutes..</p>
                </div>

            </div>
        </div>
    </header>

    {{-- <form action="{{ route('save_template') }}" method="post"> --}}
        @csrf
    
        <section class="latest-podcast-section section-padding" id="section_2">

            <div class="row justify-content-center">

                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block d-flex">
                        <div class="">
                            <div class="custom-block-icon-wrap">
                                
                                <input type="checkbox" id="template1" name="template1" onchange="handleCheckboxChange('template1', 'template2')">
                                <img src="images/profile/1.jpg" alt="profile_pic">
                               
                            </div>
                            
                        </div>
                      
                    </div>
                </div>
              
           
                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block d-flex">
                        <div class="">
                            <div class="custom-block-icon-wrap">

                                <input type="checkbox" id="template2" name="template2" onchange="handleCheckboxChange('template2', 'template1')">
                                <img src="images/profile/2.jpg" alt="profile_pic">
                                
                               
                            
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center" style="padding:10px;">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </section>
    </form>

</main>

@include('inc.newfooter')

<script>
    function handleCheckboxChange(currentCheckboxId, otherCheckboxId) {
        const currentCheckbox = document.getElementById(currentCheckboxId);
        const otherCheckbox = document.getElementById(otherCheckboxId);
        if (currentCheckbox.checked) {
            otherCheckbox.disabled = true;
        } else {
            otherCheckbox.disabled = false;
        }
    }
</script>

</body>
</html>
