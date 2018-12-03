<?php
?>

<section class="add-clients">
    <h2>Add a Client</h2>
    <form class="add-clients__form form row">
        <div class="form-group col-4">
            <label for="client">Client</label>
            <input type="text" class="form-control" id="client" placeholder="Enter client name">
        </div>
        <div class="form-group col-4">
            <label for="contact-email">Email address</label>
            <input type="email" class="form-control" id="contact-email" placeholder="Enter email">
        </div>
        <div class="form-group col-4">
            <label for="client">Agency (if applicable)</label>
            <input type="text" class="form-control" id="client" placeholder="Enter agency name">
        </div>
        <div class="form-group col-4">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="hosting">
                <label class="form-check-label" for="hosting">Hosting?</label>
            </div>
            <div class="d-flex">
                <div class="form-group">
                    <label for="client">Renewal date</label>
                    <input type="date" class="form-control" id="client" placeholder="Enter agency name">
                </div>
                <div class="form-group">
                    <label for="client">Invoiced</label>
                    <input type="date" class="form-control" id="client" placeholder="Enter agency name">
                </div>
            </div>
        </div>
        <div class="form-group col-4">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="hosting">
                <label class="form-check-label" for="hosting">Domain?</label>
            </div>
            <div class="d-flex">
                <div class="form-group">
                    <label for="client">Renewal date</label>
                    <input type="date" class="form-control" id="client" placeholder="Enter agency name">
                </div>
                <div class="form-group">
                    <label for="client">Invoiced</label>
                    <input type="date" class="form-control" id="client" placeholder="Enter agency name">
                </div>
            </div>
        </div>
        <div class="form-group col-4">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="hosting">
                <label class="form-check-label" for="hosting">Retainer?</label>
            </div>
            <div class="d-flex">
                <div class="form-group">
                    <label for="frequency">Frequency</label>
                    <div class="form-group">
                        <select class="form-control" id="frequency">
                            <option>Weekly</option>
                            <option>Monthly</option>
                            <option>Quarterly</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="client">Invoiced</label>
                    <input type="date" class="form-control" id="client" placeholder="Enter agency name">
                </div>
            </div>
        </div>
    </form>
</section>