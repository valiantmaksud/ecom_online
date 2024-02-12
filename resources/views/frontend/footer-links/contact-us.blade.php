<x-layout>
    <x-slot name="content">


    <!-- contact section start here -->
    <div class="contact_section">
        <div class="container">
            <div class="contact_inner">
                <div class="common_title">
                    <h2>CONTACT US</h2>
                </div>
                <div class="row">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <div class="contact_form">
                            <div class="contact-form-body">
                                <div class="subject">
                                    <label for="subject">Subject*</label> <br>
                                    <select name="sunject" id="subject">
                                        <option value="cs">Customer Service</option>
                                        <option value="cs">Webmaster</option>
                                    </select>
                                </div>
                                <div class="email">
                                    <label for="email">Email*</label> <br>
                                    <input type="email">
                                </div>
                                <div class="number">
                                    <label for="number">Phone Number*</label> <br>
                                    <input type="text">
                                </div>
                                <div class="attachment">
                                    <label for="attach">Attachment*</label> <br>
                                    <input type="file">
                                </div>
                                <label for="Message">Message*</label> <br>
                                <textarea name="message" id="message" cols="80" rows="5"></textarea>
                                <div class="contact_btn">
                                    <a href="#">SEND</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact_details">
                            <div class="contact_box">
                                <div class="contact_title">
                                    <p>Contact <span>Details</span></p>
                                </div>
                                <div class="contact_info">
                                    <div>
                                        <div class="icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    </div>
                                    <div class="contact_number">
                                        <a href="tel:{{ company()->phone }}">{{ company()->phone }},</a> <br>
                                        <a href="tel:{{ company()->hotline }}">{{ company()->hotline }} </a>
                                    </div>
                                </div>
                                <div class="contact_info">
                                    <div>
                                        <div class="icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    </div>
                                    <div class="contact_number">
                                        <p>{{ company()->email }}</p>
                                    </div>
                                </div>
                                <div class="contact_info">
                                    <div>
                                        <div class="icon">
                                        <i class="far fa-home"></i>
                                    </div>
                                    </div>
                                    <div class="contact_number">
                                        <p>{{ company()->address }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end here -->


    </x-slot>
</x-layout>
