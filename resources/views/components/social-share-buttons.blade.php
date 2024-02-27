<ul class="flex justify-center mt-5 space-x-5">
    <li>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank"
            class="text-gray-500 dark:hover:text-sky-300 hover:text-sky-800 dark:text-gray-400">
            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
    </li>
    <li>
        <a href="https://twitter.com/intent/tweet?text={{ url()->current() }}" target="_blank"
            class="text-gray-500 dark:hover:text-sky-300 hover:text-sky-800 dark:text-gray-400">
            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                </path>
            </svg>
        </a>
    </li>
    <li>
        <a href="https://reddit.com/submit?url={{ url()->current() }}" target="_blank"
            class="text-gray-500 dark:hover:text-sky-300 hover:text-sky-800 dark:text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M24 11.779c0-1.459-1.192-2.645-2.657-2.645-.715 0-1.363.286-1.84.746-1.81-1.191-4.259-1.949-6.971-2.046l1.483-4.669 4.016.941-.006.058c0 1.193.975 2.163 2.174 2.163 1.198 0 2.172-.97 2.172-2.163s-.975-2.164-2.172-2.164c-.92 0-1.704.574-2.021 1.379l-4.329-1.015c-.189-.046-.381.063-.44.249l-1.654 5.207c-2.838.034-5.409.798-7.3 2.025-.474-.438-1.103-.712-1.799-.712-1.465 0-2.656 1.187-2.656 2.646 0 .97.533 1.811 1.317 2.271-.052.282-.086.567-.086.857 0 3.911 4.808 7.093 10.719 7.093s10.72-3.182 10.72-7.093c0-.274-.029-.544-.075-.81.832-.447 1.405-1.312 1.405-2.318zm-17.224 1.816c0-.868.71-1.575 1.582-1.575.872 0 1.581.707 1.581 1.575s-.709 1.574-1.581 1.574-1.582-.706-1.582-1.574zm9.061 4.669c-.797.793-2.048 1.179-3.824 1.179l-.013-.003-.013.003c-1.777 0-3.028-.386-3.824-1.179-.145-.144-.145-.379 0-.523.145-.145.381-.145.526 0 .65.647 1.729.961 3.298.961l.013.003.013-.003c1.569 0 2.648-.315 3.298-.962.145-.145.381-.144.526 0 .145.145.145.379 0 .524zm-.189-3.095c-.872 0-1.581-.706-1.581-1.574 0-.868.709-1.575 1.581-1.575s1.581.707 1.581 1.575-.709 1.574-1.581 1.574z" />
            </svg>
        </a>
    </li>
    <li>
        <a role="button" id="copyLink"
            class="text-gray-500 dark:hover:text-sky-300 hover:text-sky-800 dark:text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-10 h-10"
                viewBox="0 0 24 24" version="1.1">
                <g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                    <g id="ic_fluent_copy_link_24_filled" fill-rule="nonzero">
                        <path
                            d="M13.7533481,6.49330383 L10.2466519,6.49330383 C9.46988587,6.49330383 8.78519098,6.09910034 8.38170952,5.49983563 L6.25,5.5 C5.87030423,5.5 5.55650904,5.78215388 5.50684662,6.14822944 L5.5,6.25 L5.5,19.754591 C5.5,20.1342868 5.78215388,20.448082 6.14822944,20.4977444 L6.35177056,20.5114376 C6.71784612,20.5611 7,20.8748952 7,21.254591 C7,21.6688046 6.66421356,22.004591 6.25,22.004591 C5.05913601,22.004591 4.08435508,21.0794294 4.00519081,19.9086398 L4,19.754591 L4,6.25 C4,5.05913601 4.92516159,4.08435508 6.09595119,4.00519081 L6.25,4 L8.01344395,3.9994587 C8.13651196,2.8749731 9.08940148,2 10.2466519,2 L13.7533481,2 C14.9105985,2 15.863488,2.8749731 15.9865561,3.9994587 L17.75,4 C18.940864,4 19.9156449,4.92516159 19.9948092,6.09595119 L20,6.25 L20,11.75425 C20,12.1684635 19.6642136,12.50425 19.25,12.50425 C18.8703042,12.50425 18.556509,12.2220961 18.5068466,11.8560205 L18.5,11.75425 L18.5,6.25 C18.5,5.87030423 18.2178461,5.55650904 17.8517706,5.50684662 L17.75,5.5 L15.6182905,5.49983563 C15.214809,6.09910034 14.5301141,6.49330383 13.7533481,6.49330383 Z M16.9999998,13.9975257 L17.9999998,13.9975257 C20.209139,13.9975257 21.9999998,15.7883867 21.9999998,17.9975257 C21.9999998,20.1397211 20.3160315,21.8886046 18.2038265,21.9926208 L18.004591,21.9975151 L17.004591,22.0021276 C16.452312,22.0046417 16.0025461,21.5589866 15.9999891,21.0067076 C15.9976554,20.4938772 16.3817517,20.069438 16.87882,20.0093903 L16.995409,20.0021272 L17.9999998,19.9975257 C19.1045695,19.9975257 19.9999998,19.1020952 19.9999998,17.9975257 C19.9999998,16.9431639 19.1841222,16.0793606 18.1492621,16.0030114 L17.9999998,15.9975257 L16.9999998,15.9975257 C16.4477153,15.9975257 15.9999891,15.5498104 15.9999891,14.9975257 C15.9999891,14.4846898 16.3860402,14.0620185 16.8833787,14.0042534 L16.9999998,13.9975257 L17.9999998,13.9975257 L16.9999998,13.9975257 Z M12.5,14.0021167 L13.5,14.0021167 C14.0522847,14.0021167 14.5,14.4498319 14.5,15.0021167 C14.5,15.5149525 14.1139598,15.9376238 13.6166211,15.9953889 L13.5,16.0021167 L12.5,16.0021167 C11.3954305,16.0021167 10.5,16.8975472 10.5,18.0021167 C10.5,19.0564785 11.3158778,19.9202818 12.3507377,19.9966309 L12.5,20.0021167 L13.5,20.0021167 C14.0522847,20.0021167 14.5,20.4498319 14.5,21.0021167 C14.5,21.5149525 14.1139598,21.9376238 13.6166211,21.9953889 L13.5,22.0021167 L12.5,22.0021167 C10.290861,22.0021167 8.5,20.2112557 8.5,18.0021167 C8.5,15.8599213 10.1839685,14.1110378 12.3003597,14.007012 L12.5,14.0021167 L13.5,14.0021167 L12.5,14.0021167 Z M12.4985614,16.9998212 L18,16.9998212 C18.5522847,16.9998212 19,17.4475364 19,17.9998212 C19,18.512657 18.6139598,18.9353283 18.1166211,18.9930934 L18,18.9998212 L12.4985614,18.9998212 C11.9462767,18.9998212 11.4985614,18.5521059 11.4985614,17.9998212 C11.4985614,17.4869853 11.8846016,17.064314 12.3819403,17.0065489 L12.4985614,16.9998212 L18,16.9998212 L12.4985614,16.9998212 Z M13.7533481,3.5 L10.2466519,3.5 C9.83428745,3.5 9.5,3.83428745 9.5,4.24665191 C9.5,4.65901638 9.83428745,4.99330383 10.2466519,4.99330383 L13.7533481,4.99330383 C14.1657126,4.99330383 14.5,4.65901638 14.5,4.24665191 C14.5,3.83428745 14.1657126,3.5 13.7533481,3.5 Z"
                            id="🎨-Color">
                        </path>
                    </g>
                </g>
            </svg>
        </a>
    </li>
    <li>
        <form action="{{ route('posts.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="url" value="{{ url()->current() }}">
            <button role="button" type="submit"
                class="text-gray-500 dark:hover:text-sky-300 hover:text-sky-800 dark:text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-10 h-10" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>

            </button>
        </form>
    </li>
</ul>

<script>
    document.querySelector('#copyLink').onclick = () => {
        navigator.clipboard.writeText(window.location.href);
    }
</script>
