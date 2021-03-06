@php
    $isLoginPage = request()->path() === "admin/login";
@endphp
<div class="pt-2">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 460 78.3" style="enable-background:new 0 0 460 78.3; max-width: 150px" xml:space="preserve" class="w-full mx-auto {{$isLoginPage ? 'text-80': 'text-white px-4'}}" >
        <g>
            <path d="M40.2,12.5H13.5v13.3h25v10.4h-25v14.5H41v10.7H0.5V1.8h39.7V12.5z" fill="currentColor"></path>
            <path d="M66.8,14.9c6.9,0,11.7,1.3,14.7,3.8c2.9,2.5,4.4,6,4.4,10.5v22.2c0,1.8,0.1,3.5,0.3,5.1c0.2,1.6,0.6,3.2,1.3,4.8H75
                c-0.7-1.4-1.2-2.9-1.4-4.6c-1.6,2.1-3.6,3.6-5.9,4.4s-4.7,1.3-7.3,1.3c-2.4,0-4.5-0.3-6.4-1c-1.9-0.7-3.5-1.6-4.8-2.9
                c-1.3-1.2-2.3-2.7-2.9-4.4c-0.7-1.7-1-3.5-1-5.5c0-4.2,1.4-7.7,4.2-10.2c2.8-2.6,7.6-4.3,14.4-5.1l9.4-1.2v-2c0-2.4-0.5-4-1.4-5
                s-2.8-1.4-5.5-1.4c-2.6,0-4.4,0.5-5.5,1.4c-1.1,0.9-1.7,2.4-1.7,4.6H47c0.1-4.9,1.9-8.6,5.4-11C55.9,16.1,60.7,14.9,66.8,14.9z
                M67,40.8c-3.3,0.5-5.6,1.2-7,2.2c-1.4,1-2.1,2.5-2.1,4.4c0,1.6,0.5,2.9,1.4,3.9c1,1,2.5,1.5,4.6,1.5c1.2,0,2.5-0.2,3.6-0.6
                c1.2-0.4,2.2-1,3-1.7c0.9-0.7,1.5-1.6,2-2.6c0.5-1,0.8-2.2,0.8-3.4v-4.4L67,40.8z" fill="currentColor"></path>
            <path d="M114.2,15c5.1,0,9.4,1.1,12.8,3.3c3.4,2.2,6,5.2,7.9,9l-10.8,4.2c-0.8-2.2-2-3.8-3.5-4.9c-1.6-1.1-3.4-1.7-5.7-1.7
                c-3.2,0-5.8,1.1-7.7,3.4c-1.9,2.3-2.9,5.7-2.9,10.3c0,4.6,0.9,8.1,2.8,10.5c1.9,2.4,4.5,3.6,7.8,3.6c1.4,0,2.6-0.2,3.7-0.6
                c1-0.4,2-0.9,2.7-1.7c0.8-0.7,1.4-1.5,2-2.5c0.5-0.9,1-1.9,1.4-2.9l10.7,4.2c-1.8,3.9-4.5,7.1-7.9,9.6c-3.5,2.5-7.9,3.7-13.2,3.7
                c-3.6,0-6.8-0.6-9.6-1.8c-2.9-1.2-5.3-2.8-7.2-4.9c-2-2.1-3.5-4.6-4.5-7.5c-1-2.9-1.6-6.1-1.6-9.5c0-3.5,0.5-6.6,1.6-9.6
                c1.1-2.9,2.6-5.4,4.6-7.5c2-2.1,4.4-3.7,7.2-4.9C107.5,15.6,110.7,15,114.2,15z" fill="currentColor"></path>
            <path d="M152.3,21.6c3.5-4.5,7.9-6.7,13.3-6.7c4.9,0,8.7,1.5,11.3,4.5c2.6,3,4,7.2,4,12.6v29.2h-12.4V35.3c0-3.2-0.5-5.6-1.4-7.4
                c-1-1.7-2.8-2.6-5.5-2.6c-2.7,0-4.9,1-6.6,3c-1.7,2-2.5,4.7-2.5,8v24.8h-12.4V1.8h12.4V21.6z" fill="currentColor"></path>
            <path d="M219.8,31.4h12.3v10h-12.3v13.1h-11.9V41.4h-12.3v-10h12.3V18.3h11.9V31.4z" fill="currentColor"></path>
            <path d="M289.4,12.5h-26.8v13.3h25v10.4h-25v14.5h27.5v10.7h-40.5V1.8h39.7V12.5z" fill="currentColor"></path>
            <path d="M321,61.3h-15.2L291,16.1h13.8l8.7,34.9l9.1-34.9h13.3L321,61.3z" fill="currentColor"></path>
            <path d="M357.6,15c3.5,0,6.5,0.6,9.3,1.7c2.7,1.2,5,2.8,6.9,4.9s3.3,4.7,4.3,7.7c1,3,1.5,6.3,1.5,9.9v2.4h-31.4
                c0.2,3.7,1.3,6.5,3.2,8.3c1.9,1.8,4.5,2.7,7.7,2.7c2.6,0,4.6-0.6,6.3-1.7c1.6-1.1,2.9-2.5,3.9-4.2l9.9,4.8c-2.2,3.4-5,6-8.4,7.9
                c-3.5,1.9-7.6,2.8-12.5,2.8c-3.6,0-6.9-0.6-9.7-1.8c-2.8-1.2-5.2-2.8-7.2-4.9c-2-2.1-3.5-4.6-4.5-7.5c-1-2.9-1.6-6.1-1.6-9.5
                c0-3.5,0.5-6.6,1.5-9.6c1-2.9,2.4-5.4,4.3-7.5c1.9-2.1,4.2-3.7,7-4.9C350.9,15.6,354,15,357.6,15z M357.6,24
                c-2.7,0-4.9,0.8-6.6,2.4c-1.7,1.6-2.6,4.1-2.9,7.4h18.7c-0.2-3.4-1.1-5.9-2.7-7.4C362.5,24.8,360.3,24,357.6,24z" fill="currentColor"></path>
            <path d="M409.7,14.9c1.2,0,2.4,0.1,3.4,0.3v12.1c-0.8-0.1-1.4-0.1-1.8-0.1h-0.9c-1.8,0-3.4,0.2-4.9,0.7c-1.5,0.5-2.8,1.2-3.9,2.4
                c-1.1,1.1-2,2.7-2.6,4.7c-0.7,2-1,4.5-1,7.6v18.7h-12.4V16.1h12.1v7.3c1.5-3.1,3.3-5.2,5.4-6.5C405.1,15.6,407.4,14.9,409.7,14.9z" fill="currentColor"></path>
            <path d="M445.4,62.9c-0.7,2.2-1.4,4.1-2.3,5.9c-0.9,1.8-2,3.3-3.3,4.5c-1.4,1.2-3,2.2-5,2.9s-4.4,1-7.3,1c-1.3,0-2.5-0.1-3.5-0.2
                c-1-0.1-2-0.3-2.8-0.4V68c1,0.1,1.8,0.2,2.3,0.2h1.7c1.6,0,2.9-0.1,3.9-0.3c1-0.2,1.8-0.6,2.5-1.1c0.6-0.5,1.1-1.2,1.5-2.1
                c0.4-0.9,0.7-2,1-3.4h-4.8l-14.8-45.1h13.9l9.1,36.4l8.4-36.4h13.3L445.4,62.9z" fill="currentColor"></path>
        </g>
    </svg>
</div>