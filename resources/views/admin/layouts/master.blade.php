<!doctype html>

<html lang="en">

<!--========= head ===========-->
@include('admin.layouts.includes._head')



<body>

    <!------------------------- LAYOUT WRAPPER -------->
    <div id="layout-wrapper">


        <!--======================= HEADER ==========-->
        @include('admin.layouts.includes._header')


        <!--==================== LEFT SIDEBAR =======-->
        @include('admin.layouts.includes._left_sidebar')


        <!---------------------- MAIN CONTENT --------->
        <div class="main-content">


            <!------------------ PAGE CONTENT --------->
            <div class="page-content">

                <!------------- CONTAINER FLUID ------->
                <div class="container-fluid">

                    <x-alert />
                    <!--=== MAIN / DYNAMIC CONTENT ==-->
                    {{ $content ?? 'Default Content' }}


                </div>
                <!----- CONTAINER FLUID ------->

            </div>
            <!---------- PAGE CONTENT --------->


            <!--================== FOOTER ===========-->
            @include('admin.layouts.includes._footer')



        </div>
        <!-------------- MAIN CONTENT --------->


    </div>
    <!----------------- LAYOUT WRAPPER -------->



    <!--======================= RIGHT SIDEBAR =======-->
    {{-- @include('admin.layouts.includes._right_sidebar') --}}


    <!--===================== HIDDEN FORM FOR DELETE METHOD =============-->
    <form action="" id="deleteItemForm" method="POST">
        @csrf
        @method('DELETE')
    </form>
    
    <!--===================== MASTER FILE SCRIPT ====-->
    @include('admin.layouts.includes._master_file_script')


    <!-- DYNAMICALLY INCLUDE SCRIPT -->
    {{ $script ?? '' }}
</body>

</html>
