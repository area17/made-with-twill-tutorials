<div class="flex justify-start items-center text-gray-500">


    @if($socials->twitter != null)
        <a class="block flex items-center hover:text-gray-700 mr-5" href="https://twitter.com/{{$socials->twitter}}">
            <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>
                    Twitter</title>
                <path
                    d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path>
            </svg>
        </a>
    @endif

    @if($socials->linkedin != null)
        <a class="block flex items-center hover:text-gray-700 mr-5" href="{{$socials->linkedin}}">
            <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>
                    LinkedIn</title>
                <path
                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
            </svg>
        </a>
    @endif

    @if($socials->email != null)
        <a class="block flex items-center hover:text-gray-700 mr-5" href="mailto:{{$socials->email}}">
            <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>
                    Email</title>
                <path
                    d="M12 12.713l-11.985-9.713h23.971l-11.986 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z"/>
            </svg>
        </a>
    @endif

    @if($socials->portfolio_link != null)
        <a class="block flex items-center hover:text-gray-700 mr-5" href="http://{{$socials->portfolio_link}}">
            <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>
                    Portfolio</title>
                <path
                    d="M2 9l-1-7h5.694c1.265 1.583 1.327 2 3.306 2h13l-1 5h-4.193l-3.9-3-1.464 1.903 1.428 1.097h-1.971l-3.9-3-2.307 3h-3.693zm-2 2l2 11h20l2-11h-24z"/>
            </svg>
        </a>
    @endif

</div>
