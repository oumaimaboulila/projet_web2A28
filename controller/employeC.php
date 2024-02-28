<?php
require_once '../model/employer.php';
class employeC{
    public function show($employer) {
        $table = "<table border='1'>
                    <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Password</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                    </tr>
                    <tr>
                        <td>{$employer->last_name}</td>
                        <td>{$employer->first_name}</td>
                        <td>{$employer->password}</td>
                        <td>{$employer->phone}</td>
                        <td>{$employer->email}</td>
                        <td>{$employer->dob}</td>
                    </tr>
                </table>";
        echo $table;
    }
}

?>

