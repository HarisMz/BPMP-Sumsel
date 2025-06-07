<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Peraga Komponen: Data Table</title>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/modules/loadlist.php'); ?>
</head>
<body>

    <section class="container vertical">
        <div class="wrapper py-10">
            <div class="flex column">
            	<h1 class="headline-sm">Data Table</h1>
            	<div class="spacer-4 vertical"></div>
            	<p class="display-sm">Komponen Data Table.</p>

            	<div class="spacer-8 vertical"></div>
            	<p class="subheading pb-2">Data Table 1 (Pakai Footer dan Pagination)</p>
                <div class="spacer-4 vertical"></div>
                <table class="table datatable striped searchbox has-footer" id="tabel-pertama" data-table-name="Tabel Pertama">
                    <thead>
                        <tr>
                            <th data-column="id" data-col-width="3" class="sort-icon unfold">ID</th>
                            <th data-column="name" data-col-width="41" class="sort-icon unfold">Name</th>
                            <th data-column="age" data-col-width="28" class="sort-icon unfold">Age</th>
                            <th data-column="city" data-col-width="28" class="sort-icon unfold">City</th>
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
                        <tr>
                            <td>5</td>
                            <td>Charlie Brown</td>
                            <td>40</td>
                            <td>Phoenix</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Eva Davis</td>
                            <td>32</td>
                            <td>Miami</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Frank Miller</td>
                            <td>45</td>
                            <td>Seattle</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Grace Lee</td>
                            <td>27</td>
                            <td>Boston</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Henry Wilson</td>
                            <td>38</td>
                            <td>Denver</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Ivy Chen</td>
                            <td>29</td>
                            <td>San Francisco</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Jack Taylor</td>
                            <td>33</td>
                            <td>Dallas</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Kate Brown</td>
                            <td>31</td>
                            <td>Atlanta</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Leo Martinez</td>
                            <td>36</td>
                            <td>Portland</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Mia Johnson</td>
                            <td>26</td>
                            <td>Las Vegas</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Noah Garcia</td>
                            <td>42</td>
                            <td>San Diego</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Olivia Moore</td>
                            <td>39</td>
                            <td>Austin</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Peter Wang</td>
                            <td>37</td>
                            <td>Philadelphia</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Quinn Adams</td>
                            <td>28</td>
                            <td>Detroit</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Rachel Kim</td>
                            <td>34</td>
                            <td>Minneapolis</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Samuel Patel</td>
                            <td>41</td>
                            <td>Charlotte</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>John Doe</td>
                            <td>30</td>
                            <td>New York</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Jane Smith</td>
                            <td>25</td>
                            <td>Los Angeles</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Bob Johnson</td>
                            <td>35</td>
                            <td>Chicago</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Alice Williams</td>
                            <td>28</td>
                            <td>Houston</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Charlie Brown</td>
                            <td>40</td>
                            <td>Phoenix</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>Eva Davis</td>
                            <td>32</td>
                            <td>Miami</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>Frank Miller</td>
                            <td>45</td>
                            <td>Seattle</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>Grace Lee</td>
                            <td>27</td>
                            <td>Boston</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Henry Wilson</td>
                            <td>38</td>
                            <td>Denver</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>Ivy Chen</td>
                            <td>29</td>
                            <td>San Francisco</td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>Jack Taylor</td>
                            <td>33</td>
                            <td>Dallas</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Kate Brown</td>
                            <td>31</td>
                            <td>Atlanta</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>Leo Martinez</td>
                            <td>36</td>
                            <td>Portland</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Mia Johnson</td>
                            <td>26</td>
                            <td>Las Vegas</td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>Noah Garcia</td>
                            <td>42</td>
                            <td>San Diego</td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>Olivia Moore</td>
                            <td>39</td>
                            <td>Austin</td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td>Peter Wang</td>
                            <td>37</td>
                            <td>Philadelphia</td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td>Quinn Adams</td>
                            <td>28</td>
                            <td>Detroit</td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td>Rachel Kim</td>
                            <td>34</td>
                            <td>Minneapolis</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>Samuel Patel</td>
                            <td>41</td>
                            <td>Charlotte</td>
                        </tr>
                    </tbody>
                </table>


                <div class="spacer-8 vertical"></div>
                <p class="subheading pb-2">Data Table 1 (Tanpa Footer)</p>
                <div class="spacer-4 vertical"></div>
                <table class="table datatable striped searchbox" id="tabel-pertama-lagi" data-table-name="Tabel Pertama Lagi">
                    <thead>
                        <tr>
                            <th data-column="id" data-col-width="3" class="sort-icon unfold">ID</th>
                            <th data-column="name" data-col-width="41" class="sort-icon unfold">Name</th>
                            <th data-column="age" data-col-width="28" class="sort-icon unfold">Age</th>
                            <th data-column="city" data-col-width="28" class="sort-icon unfold">City</th>
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
                        <tr>
                            <td>5</td>
                            <td>Charlie Brown</td>
                            <td>40</td>
                            <td>Phoenix</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Eva Davis</td>
                            <td>32</td>
                            <td>Miami</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Frank Miller</td>
                            <td>45</td>
                            <td>Seattle</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Grace Lee</td>
                            <td>27</td>
                            <td>Boston</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Henry Wilson</td>
                            <td>38</td>
                            <td>Denver</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Ivy Chen</td>
                            <td>29</td>
                            <td>San Francisco</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Jack Taylor</td>
                            <td>33</td>
                            <td>Dallas</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Kate Brown</td>
                            <td>31</td>
                            <td>Atlanta</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Leo Martinez</td>
                            <td>36</td>
                            <td>Portland</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Mia Johnson</td>
                            <td>26</td>
                            <td>Las Vegas</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Noah Garcia</td>
                            <td>42</td>
                            <td>San Diego</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Olivia Moore</td>
                            <td>39</td>
                            <td>Austin</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Peter Wang</td>
                            <td>37</td>
                            <td>Philadelphia</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Quinn Adams</td>
                            <td>28</td>
                            <td>Detroit</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Rachel Kim</td>
                            <td>34</td>
                            <td>Minneapolis</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Samuel Patel</td>
                            <td>41</td>
                            <td>Charlotte</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>John Doe</td>
                            <td>30</td>
                            <td>New York</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Jane Smith</td>
                            <td>25</td>
                            <td>Los Angeles</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Bob Johnson</td>
                            <td>35</td>
                            <td>Chicago</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Alice Williams</td>
                            <td>28</td>
                            <td>Houston</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Charlie Brown</td>
                            <td>40</td>
                            <td>Phoenix</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>Eva Davis</td>
                            <td>32</td>
                            <td>Miami</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>Frank Miller</td>
                            <td>45</td>
                            <td>Seattle</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>Grace Lee</td>
                            <td>27</td>
                            <td>Boston</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Henry Wilson</td>
                            <td>38</td>
                            <td>Denver</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>Ivy Chen</td>
                            <td>29</td>
                            <td>San Francisco</td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>Jack Taylor</td>
                            <td>33</td>
                            <td>Dallas</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Kate Brown</td>
                            <td>31</td>
                            <td>Atlanta</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>Leo Martinez</td>
                            <td>36</td>
                            <td>Portland</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Mia Johnson</td>
                            <td>26</td>
                            <td>Las Vegas</td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>Noah Garcia</td>
                            <td>42</td>
                            <td>San Diego</td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>Olivia Moore</td>
                            <td>39</td>
                            <td>Austin</td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td>Peter Wang</td>
                            <td>37</td>
                            <td>Philadelphia</td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td>Quinn Adams</td>
                            <td>28</td>
                            <td>Detroit</td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td>Rachel Kim</td>
                            <td>34</td>
                            <td>Minneapolis</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>Samuel Patel</td>
                            <td>41</td>
                            <td>Charlotte</td>
                        </tr>
                    </tbody>
                </table>

                <div class="spacer-8 vertical"></div>
                <p class="subheading pb-2">Datatable tanpa Opsi Apapun (Cuma Sort)</p>
                <div class="spacer-4 vertical"></div>
                <table class="table datatable" id="tabel-kedua">
                    <thead>
                        <tr>
                            <th data-column="id" data-col-width="3" class="sort-icon unfold">ID</th>
                            <th data-column="name" data-col-width="41" class="sort-icon unfold">Name</th>
                            <th data-column="age" data-col-width="28" class="sort-icon unfold">Age</th>
                            <th data-column="city" data-col-width="28" class="sort-icon unfold">City</th>
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
                <p class="subheading pb-2">Table Biasa</p>
                <div class="spacer-4 vertical"></div>
                <table class="table" id="tabel-biasa">
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