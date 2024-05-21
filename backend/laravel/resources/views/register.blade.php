<x-layout>
    <div class="container" style="margin-top:10px">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="#" id="login-form" class="white-popup-block">
                    <div class="login-custom">
                        <div class="heading">
                            <h4><i class="fas fa-edit"></i> Register Now</h4>
                            <h3>Remplissez le formulaire pour l'entreprise</h3>
                        </div>
                        <div id="entrprise">
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
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Raison*" type="text" name="name">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email*" type="email" name="email">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Site" type="text" name="site">
                                    </div>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                <input type="file" class="form-control" id="inputGroupFile01">
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

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Representant" type="text" name="representant">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Telephone 1" type="text" name="telephone1">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Telephone 2" type="text" name="telephone2">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Telephone 3" type="text" name="telephone3">
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
    </div>
</x-layout>
