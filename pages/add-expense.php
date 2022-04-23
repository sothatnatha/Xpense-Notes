<!-- popup add new expesne -->
<div class="add-expense-wrapper">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" id="btn-add-new-xpense" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add New Expenses +
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Your Expenses</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <form action="" method="Post" autocomplete="off">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="txt-account" placeholder="Account" aria-label="Username" required>
                                <input type="number" step="any" name="txt-amt" class="form-control" id="input-amt" placeholder="Amount $" aria-label="Server" required>
                            </div>
                            <select name="txt-choices" id="" class="form-control mt-3 mb-3" required>
                                <option>-Please Select Methods-</option>
                                <option value="Bank Account">Bank Account</option>
                                <option value="Cash On Hand">Cash On Hand</option>

                            </select>
                            <textarea name="txt-memo" required id="" cols="" rows="" class="form-control mb-3" placeholder="Memo @type something"></textarea>
                            <input type="date" name="txt-created-at" id="" class="form-control" required>
                            <input type="reset" class="form-control mt-3 btn btn-light">
                            <input type="submit" class="form-control mt-3" value="Add Expenses" id="btn-submit-xpense" name="btn-submit">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" id="btn-cancel-xpense" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    