<div class="table-data-container container">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>N<sup>o</sup></th>
                        <th>Account</th>
                        <th>Amount</th>
                        <th>Method</th>
                        <th>Memo</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                            $sql ="SELECT * FROM `tbl_expense`";
                            $results = mysqli_query($conn, $sql);
                            
                            if($results->num_rows>0) {
                            $i=1;
                            while($row=$results->fetch_assoc())  
                            {
                                $bank_types = $row['bank_type'];
                        ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['account_name']; ?></td>
                                    <td>$<?php echo $row['amount']; ?></td>
                                    <td><?php echo $row['bank_type']; ?></td>
                                    <td><?php echo $row['memo']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#modaledit<?php echo $i;?>">
                                            <span class="material-symbols-rounded" style="font-size: 18px; color: #333;">
                                                edit
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                 <!-- Modal update -->
                                <div class="modal fade" id="modaledit<?php echo $i;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Your Expenses</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="Post" autocomplete="off" required>
                                                <input type="hidden" name="txt-id" value="<?php echo $row['id'];?>"> 

                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="txt-account-updated" placeholder="Account" aria-label="Username" value="<?=$row['account_name']?>">
                                                    <input type="number" step="any" name="txt-amt-update" class="form-control" id="input-amt" placeholder="Amount $" aria-label="Server" value="<?=$row['amount']?>">
                                                </div>
                                                 <select name="txt-choices-updated" id="" class="form-control mt-3 mb-3" required>
                                                    <option value="Please Change Methods">Please Change Methods</option>
                                                    <option value="Bank Account" <?php if($row['bank_type'] === "Bank Account") { echo "selected";} ?>>Bank Account</option>
                                                    <option value="Cash On Hand" <?php if($row['bank_type'] === "Cash On Hand") { echo "selected";} ?>>Cash On Hand</option>
                                                </select>
                                                <textarea name="txt-memo-updated" id="" cols="30" rows="" class="form-control mb-3" placeholder="Memo" ><?=$row['memo']?></textarea>
                                                <input type="date" name="txt-created-at-updated" id="" class="form-control" value="<?=$row['date']?>">
                                                <input type="submit" class="form-control mt-3" value="Update Expenses" id="btn-submit-xpense" name="btn-update">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" id="btn-cancel-xpense" data-bs-dismiss="modal">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                        <?php $i++;}}?>
                </tbody>
            </table>
</div>