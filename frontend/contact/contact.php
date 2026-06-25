<?php
require_once __DIR__ . '/../../backend/connections.php';
?>
<div class="form-container">
    <form action="/webdev/backend/insert.php" method="POST">

        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="firstname" required>
        </div>

        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lastname" required>
        </div>

        <div class="form-group">
            <label>Telephone No.</label>
            <input type="tel" name="phone" required>
        </div>

        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Province</label>
            <select id="province" name="province" required>
                <option value="">Select Province</option>
            </select>
        </div>

        <div class="form-group">
            <label>City</label>
            <select id="city" name="city" required>
                <option value="">Select City</option>
            </select>
        </div>

        <div class="form-group">
            <label>Barangay</label>
            <select id="barangay" name="barangay">
                <option value="">Select Barangay</option>
            </select>
        </div>

        <div class="form-group">
            <label>Message</label>
            <textarea name="message" required></textarea>
        </div>

        <button type="submit" name="submit">
            Submit
        </button>

    </form>
</div>

<?php if (isset($_GET['success'])): ?>
    <div id="toast" class="toast">
        Data saved successfully!
    </div>

    <script>
        setTimeout(function () {
            document.getElementById("toast").style.display = "none";
        }, 3000);
    </script>
<?php endif; ?>
