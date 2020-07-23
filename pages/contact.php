

    <div class="row mb-25">
        <div class="col-12">
        <section class="tm-contact-form-box mx-auto mb-7">
                    <h3 class="tm-title-gray mb-4 text-center">Contact Information</h3>
                    <hr class="mb-8 tm-hr tm-hr-s mx-auto">
                    <form id="contact-form" action="/post/contact.php" method="POST" class="tm-contact-form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control rounded-0" placeholder="Name"  />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control rounded-0" placeholder="Email"  />
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="contact-select" name="inquiry">
                                <option value="-">Subject</option>
                                <option value="sales">Sales &amp; Marketing</option>
                                <option value="creative">Creative Design</option>
                                <option value="uiux">UI / UX</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message" ></textarea>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary rounded-0 d-block mx-auto">Submit</button>
                        </div>
                    </form>
                </section>
               
        </div>
    </div>