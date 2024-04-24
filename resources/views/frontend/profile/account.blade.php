<x-layout>
    <x-slot name="content">


        <section class="inner-section profile-part">
            <div class="main">

                <div class="row" style="width: 100%">
                    <div class="col-lg-3">
                        <div class="profile-sidebar">
                            @include('frontend.profile._inc.sidebar')
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="profile-body">
                            <div class="customer-profile">


                                <div class="heading my-3">
                                    <i class="far fa-edit"></i> Edit Profile
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="{{ route('frontend.profile.update') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <ul>
                                                {{-- NAME --}}
                                                <li class="edit-item">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <p>Name</p>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <span>{{ auth()->user()->name }}</span>
                                                        </div>
                                                        <div class="col-lg-2 text-end">
                                                            <a href="javascript:void(0)" id="editNameBtn"
                                                                class="profile-edit-btn">Edit</a>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3" id="editName" style="display: none">
                                                        <div class="col-lg-6">
                                                            <label for=""><b>First Name</b>
                                                                <span style="color: red">*</span>
                                                            </label>
                                                            <input type="text" placeholder="Enter First Name"
                                                                name="first_name" class="form-control">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for=""><b>Last Name</b> <span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" placeholder="Enter Last Name"
                                                                name="last_name" class="form-control">
                                                        </div>
                                                        <div class="col-lg-12 text-end mt-3">
                                                            <button class="btn  bg-dark text-white"
                                                                type="submit">Update</button>
                                                        </div>
                                                    </div>
                                                </li>

                                                {{-- EMAIL --}}
                                                <li class="edit-item">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <p>Email</p>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <span>{{ auth()->user()->email }}</span>
                                                        </div>
                                                        <div class="col-lg-2 text-end">
                                                            <a href="javascript:void(0)" id="editEmailBtn"
                                                                class="profile-edit-btn">Edit</a>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3" id="editEmail" style="display: none">
                                                        <div class="col-lg-12">
                                                            <label for=""><b>Email</b>
                                                                <span style="color: red">*</span>
                                                            </label>
                                                            <input type="text" placeholder="Enter Email"
                                                                name="email" class="form-control">
                                                        </div>
                                                        <div class="col-lg-12 text-end mt-3">
                                                            <button class="btn  bg-dark text-white"
                                                                type="submit">Update</button>
                                                        </div>
                                                    </div>
                                                </li>

                                                {{-- PHONE --}}
                                                <li class="edit-item">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <p>Phone</p>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <span>{{ auth()->user()->mobile }}</span>
                                                        </div>
                                                        @if (!auth()->user()->mobile)
                                                            <div class="col-lg-2 text-end">
                                                                <a href="javascript:void(0)" id="editMobileBtn"
                                                                    class="profile-edit-btn">Edit
                                                                </a>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="row mt-3" id="editMobile" style="display: none">
                                                        <div class="col-lg-12">
                                                            <label for=""><b>Phone</b>
                                                                <span style="color: red">*</span>
                                                            </label>
                                                            <input type="text" placeholder="Enter Mobile"
                                                                name="mobile" class="form-control">
                                                        </div>
                                                        <div class="col-lg-12 text-end mt-3">
                                                            <button class="btn  bg-dark text-white"
                                                                type="submit">Update
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>

                                                {{-- PASSWORD --}}
                                                <li class="edit-item">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <p>Password</p>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <span>********</span>
                                                        </div>
                                                        <div class="col-lg-2 text-end">
                                                            <a href="javascript:void(0)" id="editPasswordBtn"
                                                                class="profile-edit-btn">Edit</a>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3" id="editPassword" style="display: none">
                                                        <div class="col-lg-6">
                                                            <label for="password"><b>Password</b> <span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" placeholder="Enter Password"
                                                                name="password" class="form-control">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="password_confirmation">
                                                                <b>Confirm Password</b>
                                                                <span style="color: red">*</span>
                                                            </label>
                                                            <input type="text" placeholder="Enter Confirm Password"
                                                                name="password_confirmation" class="form-control">
                                                        </div>
                                                        <div class="col-lg-12 text-end mt-3">
                                                            <button class="btn  bg-dark text-white"
                                                                type="submit">Update</button>
                                                        </div>
                                                    </div>
                                                </li>


                                            </ul>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>


    </x-slot>
</x-layout>
