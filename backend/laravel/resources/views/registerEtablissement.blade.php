<x-layout>
    <div class="container" style="margin-top:10px">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="#" id="login-form" class="white-popup-block">
                    <div class="login-custom">
                        <div class="heading">
                            <h4><i class="fas fa-edit"></i> Register Now</h4>
                            <h3>Remplissez le formulaire pour l'etablissement</h3>
                        </div>
                        <div id="etablissements">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="user_id">User ID</label>
                                        <select class="form-control" id="user_id" name="user_id">
                                            <option value="" disabled selected>Select User ID</option>
                                            <!-- Add options here -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="region_id">Regions ID</label>
                                            <select class="form-control" id="region_id" name="region_id">
                                                <option value="" disabled selected>Select Region ID</option>
                                                <!-- Add options here -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nom efp*" type="text" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Address*" type="text" name="address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <select class="form-control" id="city" name="city">
                                                <option value="" disabled selected>Select City</option>
                                                <!-- Add options here -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" id="status" name="status">
                                                <option value="active">Active</option>
                                                <option value="desactive">Desactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit">
                                    Sign up
                                </button>
                            </div>
                        </div>

                        <p class="link-bottom">Are you a member? <a href="#">Login now</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div
</x-layout>
