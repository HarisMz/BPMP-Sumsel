<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Table</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body>

    <section class="container vertical">
        <div class="wrapper py-10">
            <div class="flex column">
            	<h1 class="headline-sm">Table</h1>
            	<div class="spacer-4 vertical"></div>
            	<p class="display-sm">Komponen Table.</p>

            	<div class="spacer-8 vertical"></div>
            	<p class="subheading pb-2">Table Default Small</p>
            	<div class="spacer-4 vertical"></div>

                <table class="table sm">
                    <thead>
                        <tr>
                            <th data-column="id" data-col-width="28">ID</th>
                            <th data-column="name" data-col-width="41">Name</th>
                            <th data-column="age" data-col-width="3">Age</th>
                            <th data-column="city" data-col-width="28">City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>30</td>
                            <td>New York</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>25</td>
                            <td>Los Angeles</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bob Johnson</td>
                            <td>35</td>
                            <td>Chicago</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Alice Williams</td>
                            <td>28</td>
                            <td>Houston</td>
                        </tr>
                    </tbody>
                </table>

                <div class="spacer-8 vertical"></div>
                <p class="subheading pb-2">Table Default Medium</p>
                <div class="spacer-4 vertical"></div>

                <table class="table md">
                    <thead>
                        <tr>
                            <th data-column="id" data-col-width="28">ID</th>
                            <th data-column="name" data-col-width="41">Name</th>
                            <th data-column="age" data-col-width="3">Age</th>
                            <th data-column="city" data-col-width="28">City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>30</td>
                            <td>New York</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>25</td>
                            <td>Los Angeles</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bob Johnson</td>
                            <td>35</td>
                            <td>Chicago</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Alice Williams</td>
                            <td>28</td>
                            <td>Houston</td>
                        </tr>
                    </tbody>
                </table>

                <div class="spacer-8 vertical"></div>
                <p class="subheading pb-2">Table Default Large</p>
                <div class="spacer-4 vertical"></div>

                <table class="table lg">
                    <thead>
                        <tr>
                            <th data-column="id" data-col-width="28">ID</th>
                            <th data-column="name" data-col-width="41">Name</th>
                            <th data-column="age" data-col-width="3">Age</th>
                            <th data-column="city" data-col-width="28">City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>30</td>
                            <td>New York</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>25</td>
                            <td>Los Angeles</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bob Johnson</td>
                            <td>35</td>
                            <td>Chicago</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Alice Williams</td>
                            <td>28</td>
                            <td>Houston</td>
                        </tr>
                    </tbody>
                </table>

                <div class="spacer-8 vertical"></div>
                <p class="subheading pb-2">Table Default Striped</p>
                <div class="spacer-4 vertical"></div>

                <table class="table lg striped">
                    <thead>
                        <tr>
                            <th data-column="id" data-col-width="28">ID</th>
                            <th data-column="name" data-col-width="41">Name</th>
                            <th data-column="age" data-col-width="3">Age</th>
                            <th data-column="city" data-col-width="28">City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>30</td>
                            <td>New York</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>25</td>
                            <td>Los Angeles</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bob Johnson</td>
                            <td>35</td>
                            <td>Chicago</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Alice Williams</td>
                            <td>28</td>
                            <td>Houston</td>
                        </tr>
                    </tbody>
                </table>

                <div class="spacer-8 vertical"></div>
                <p class="subheading pb-2">Table Default Vertical Striped</p>
                <div class="spacer-4 vertical"></div>

                <table class="table lg vertical-striped">
                    <thead>
                        <tr>
                            <th data-column="id" data-col-width="28">ID</th>
                            <th data-column="name" data-col-width="41">Name</th>
                            <th data-column="age" data-col-width="3">Age</th>
                            <th data-column="city" data-col-width="28">City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>30</td>
                            <td>New York</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>25</td>
                            <td>Los Angeles</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bob Johnson</td>
                            <td>35</td>
                            <td>Chicago</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Alice Williams</td>
                            <td>28</td>
                            <td>Houston</td>
                        </tr>
                    </tbody>
                </table>

                <div class="spacer-8 vertical"></div>
            	<p class="subheading pb-2">Table Rounded</p>
            	<div class="spacer-4 vertical"></div>

                <table class="table lg rounded">
                    <thead>
                        <tr>
                            <th data-column="id" data-col-width="28">ID</th>
                            <th data-column="name" data-col-width="41">Name</th>
                            <th data-column="age" data-col-width="3">Age</th>
                            <th data-column="city" data-col-width="28">City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>30</td>
                            <td>New York</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>25</td>
                            <td>Los Angeles</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bob Johnson</td>
                            <td>35</td>
                            <td>Chicago</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Alice Williams</td>
                            <td>28</td>
                            <td>Houston</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </section>
</body>
</html>