@extends('users.master')
   @section('content') 


 <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
     	@foreach($items as $item )
          <li><a href="#{{ $item->id }}"><i class="icon-chevron-right"></i> {{ $item->title }}</a></li>
         @endforeach
        </ul>
      </div>
      <div class="span9">



        <!-- Global Bootstrap settings
        ================================================== -->
        @foreach($products as $product)
        <section id="{{ $product->service->id }}">        
        
            <h1>{{ $product->service->title }}</h1>
			</br>
            <img src="assets/img/{{ $product->images->first() }}" class="img-polaroid" alt="Responsive Bootstrap Theme"/>
            </br></br>
            <p>Follow the steps below to start working on this Responsive Bootstrap Theme:</p>
            
            <ol>
            
                <li>Unzip the download file <code>bootstrap-gen-2.zip</code> to a new folder that you can name as 'my site'. Your unzipped file will have two main folder.  One is a folder named 'documentation' to guide you through customizing the template and the second one is named <strong>'site'</strong> which is the actual one that holds all the files and folders you will be working on.</li>
                <li>Once your site is completed you will need to upload these files to your Web Server using FTP in order to use it on your Website.</li>
                <li>Make sure you upload the required files/folders listed below (don't upload the documentation folder):
                
                    <ul>
                    
                        <li><code>backgrounds/</code> - Backgrounds Folder</li>
						<li><code>carousal/</code> - Carousal Sliders Folder</li>
                        <li><code>email/</code> - Email scripts Folder (required to make the contact form functional)</li>
                        <li><code>images/</code> - Images Folder</li>                        
                        <li><code>scripts/</code> - Bootstrap jQuery and CSS files Folder</li>
                        <li><code>slider-images/</code> - Slider images Folder</li>
                        <li><code>styles/</code> - Custom style sheet and layout backgrounds Folder</li>
						<li><code>index.html</code> - Home-Page and other site html pages including contact.php page</li>
                    
                    </ul>
                   </br>                
                </li>
                <li>You're now good to go..! Start adding your Content and show off your Brand New Beautiful Website in style.</li>
				
            </ol>
        
        
        </section>
        
        
        <hr class="bs-docs-separator">
        
        @endforeach
       
		

      </div>
    </div>

  </div>


   @endsection