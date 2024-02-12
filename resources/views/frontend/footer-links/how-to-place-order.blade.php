<x-layout>
    <x-slot name="content">


    <!-- order section start here -->
    <div class="order_section">
        <div class="container">
            <div class="order_inner text-center">
                <h4>If you still don't know-- How To Order From {{ website_setting('site_title') }}'s Website: www.{{ website_setting('site_title') }} !!</h4>

                <iframe width="70%"
                        height="450"
                        src="https://www.youtube.com/embed/FGXoNNFnr00"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen >
                </iframe>

                <h4>
                    Check out the video link below that will give you a perfect guideline and make your life easy while ordering from {{ website_setting('site_title') }}'s Website!!
                    <a href="https://www.youtube.com/embed/FGXoNNFnr00">Watch on youtube</a>
                </h4>
            </div>
        </div>
    </div>
    <!-- order section end here -->

    </x-slot>
</x-layout>
