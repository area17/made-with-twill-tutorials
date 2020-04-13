
<section class="py-12 px-4 text-center">
  <div class="max-w-4xl mx-auto">
    <a href="{!!$block->input('project_url')!!}">
    	<div class="flex flex-wrap items-center mb-8 rounded shadow-md ">
	      <div class="md:w-1/2">
	      	  <img src="{!!$block->image('past_project_image', 'default')!!}" 
	      	  alt="{{ $block->input('project_title') }}"
	      	  >
			</div>
      
      <div class="md:w-1/2 p-8 text-left">
        <p class="text-sm text-gray-600 flex items-center">
       		@include('svgs.spotlight')
        	Spotlight
		</p>

        <h3 class="font-semibold text-3xl" >        	
        	{{ $block->input('project_title') }}
        </h3>

        <p class="text-xl mb-4">
			{!!$block->input('project_description')!!}
        </p>
      </div>

    </div>
	</a>
  </div>
</section>