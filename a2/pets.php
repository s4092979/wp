<?php
$title = "Pets Victoria";
include "includes/header.inc";
include "includes/nav.inc";
include "includes/db_connect.inc";
?>
    <main>
        <p class="petsHeading">
            Discover Pets Victoria
        </p>
        <p class="petsText">
            Pets Victoria is a dedicated pet adoption organisation based in Victoria, Australia, focused on providing a safe and loving environment for pets in need. With a compassionate approach, Pets Victoria works tirelessly to rescue, rehabilitate, and rehome dogs, cats, and other animals. Their mission is to connect these deserving pets with caring indivials and families, creating lifelong bonds. The organisation offers a range of services, including adoption counseling, pet education, and community support programs, all aimed at promoting responsible pet ownership and reducing the number of homeless animals.
        </p>
        <img class="petsImg" src="images/pets.jpeg" alt="4 pets in a field">
        <table class="petsTable">
            <tr>
                <th>Pet</th>
                <th>Type</th>
                <th>Age</th>
                <th>Location</th>
            </tr>
            <?php
            $sql = "select * from pets";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    print "<tr>\n";
                    print "<td><a href=details.php?id={$row['petid']}>" . htmlspecialchars($row['petname']) . "</a></td>\n";
                    print "<td>" . htmlspecialchars($row['type']) . "</td>\n";
                    print "<td>" . htmlspecialchars($row['age']) . "</td>\n";
                    print "<td>" . htmlspecialchars($row['location']) . "</td>\n";
                    print "</tr>\n";
                }
            }
            ?>
        </table>
    </main>
<?php include "includes/footer.inc"; ?>