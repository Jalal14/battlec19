@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('public/dist/css/jquery.dataTables.css')}}">
<style type="text/css">
	h1{
		font-size: 40px;
		font-weight: bolder;
		color: white;
	}
	h3 {
		font-size: 20px;
		line-height: 2em;
		color: white;
	}
	thead tr th, label, .paginate_button {
		color: white;
	}
	#donation_list tbody tr td {
		color: black;
	}
</style>
@endsection

@section('content')

<div class="container" style="margin-top: 100px;">
	<div class="row">
		<div class="col-md-8">
			<h1 style="text-align: center;">List of donation collected</h1>
			<hr>
			<table id="donation_list" class="display">
		    	<thead>
		        	<tr>
		        		<th>Serial</th>
			            <th>Donor</th>
			            <th>Donated amount(BDT)</th>
		        	</tr>
		    	</thead>
		    	<tbody>
		        	<tr>
			            <td>1</td>
			            <td>018-511-51788</td>
			            <td>1000</td>
		        	</tr>
			        <tr>
			        	<td>2</td>
			            <td>019-214-29557</td>
			            <td>200</td>
			        </tr>
			        <tr>
			        	<td>3</td>
			            <td>017-436-31389</td>
			            <td>50</td>
			        </tr>
			        <tr>
			        	<td>4</td>
			            <td>017-442-11596</td>
			            <td>100</td>
			        </tr>
			        <tr>
			            <td>5</td>
			            <td>017-720-16963</td>
			            <td>50</td>
			        </tr>
			        <tr>
			        	<td>6</td>
			            <td>017-159-41296</td>
			            <td>1000</td>
			        </tr>
			        <tr>
			        	<td>7</td>
			            <td>016-768-27480</td>
			            <td>100</td>
			        </tr>
			        <tr>
			        	<td>8</td>
			        	<td>018-215-56445</td>
			        	<td>500</td>
			        </tr>
			        <tr>
			        	<td>9</td>
			        	<td>017-625-93963</td>
			        	<td>500</td>
			        </tr>
			        <tr>
			        	<td>10</td>
			        	<td>Hand cash</td>
			        	<td>500</td>
			        </tr>
			        <tr>
			        	<td>11</td>
			        	<td>018-169-02743</td>
			        	<td>2000</td>
			        </tr>
			        <tr>
			        	<td>12</td>
			        	<td>017-150-40696</td>
			        	<td>200</td>
			        </tr>
			        <tr>
			        	<td>13</td>
			        	<td>017-689-42844</td>
			        	<td>50</td>
			        </tr>
			        <tr>
			        	<td>14</td>
			        	<td>017-039-86373</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>15</td>
			        	<td>017-252-49012</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>16</td>
			        	<td>015-214-98682</td>
			        	<td>1000</td>
			        </tr>
			        <tr>
			        	<td>17</td>
			        	<td>018-411-51482</td>
			        	<td>583</td>
			        </tr>
			        <tr>
			        	<td>18</td>
			        	<td>016-729-08656</td>
			        	<td>500</td>
			        </tr>
			        <tr>
			        	<td>19</td>
			        	<td>017-070-78949</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>20</td>
			        	<td>019-131-00945</td>
			        	<td>400</td>
			        </tr>
			        <tr>
			        	<td>21</td>
			        	<td>019-448-62496</td>
			        	<td>350</td>
			        </tr>
			        <tr>
			        	<td>22</td>
			        	<td>017-262-49232</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>23</td>
			        	<td>018-132-40623</td>
			        	<td>200</td>
			        </tr>
			        <tr>
			        	<td>24</td>
			        	<td>017-264-44577</td>
			        	<td>1000</td>
			        </tr>
			        <tr>
			        	<td>25</td>
			        	<td>018-422-91582</td>
			        	<td>150</td>
			        </tr>
			        <tr>
			        	<td>26</td>
			        	<td>018-277-32594</td>
			        	<td>500</td>
			        </tr>
			        <tr>
			        	<td>27</td>
			        	<td>017-845-36891</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>28</td>
			        	<td>019-121-00700</td>
			        	<td>10000</td>
			        </tr>
			        <tr>
			        	<td>29</td>
			        	<td>016-418-83821</td>
			        	<td>200</td>
			        </tr>
			        <tr>
			        	<td>30</td>
			        	<td>017-73187547</td>
			        	<td>500</td>
			        </tr>
			        <tr>
			        	<td>31</td>
			        	<td>019-998-03701</td>
			        	<td>300</td>
			        </tr>
			        <tr>
			        	<td>32</td>
			        	<td>Musa bhai</td>
			        	<td>5100</td>
			        </tr>
			        <tr>
			        	<td>33</td>
			        	<td>016-383-41647</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>34</td>
			        	<td>018-608-69725</td>
			        	<td>150</td>
			        </tr>
			        <tr>
			        	<td>35</td>
			        	<td>016-780-08122</td>
			        	<td>200</td>
			        </tr>
			        <tr>
			        	<td>36</td>
			        	<td>015-214-95429</td>
			        	<td>200</td>
			        </tr>
			        <tr>
			        	<td>37</td>
			        	<td>016-116-08899</td>
			        	<td>50</td>
			        </tr>
			        <tr>
			        	<td>38</td>
			        	<td>017-764-81921</td>
			        	<td>200</td>
			        </tr>
			        <tr>
			        	<td>39</td>
			        	<td>1-020-101-03</td>
			        	<td>500</td>
			        </tr>
			        <tr>
			        	<td>40</td>
			        	<td>016-439-63202</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>41</td>
			        	<td>018-422-91582</td>
			        	<td>500</td>
			        </tr>
			        <tr>
			        	<td>42</td>
			        	<td>018-471-74618</td>
			        	<td>300</td>
			        </tr>
			        <tr>
			        	<td>43</td>
			        	<td>017-177-66237</td>
			        	<td>500</td>
			        </tr>
			        <tr>
			        	<td>44</td>
			        	<td>1-020-101-03</td>
			        	<td>200</td>
			        </tr>
			        <tr>
			        	<td>45</td>
			        	<td>018-300-32524</td>
			        	<td>200</td>
			        </tr>
			        <tr>
			        	<td>46</td>
			        	<td>019-917-42971</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>47</td>
			        	<td>016-760-67071</td>
			        	<td>150</td>
			        </tr>
			        <tr>
			        	<td>48</td>
			        	<td>019-772-60399</td>
			        	<td>50</td>
			        </tr>
			        <tr>
			        	<td>49</td>
			        	<td>016-284-30925</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>50</td>
			        	<td>019-199-10484</td>
			        	<td>275</td>
			        </tr>
			        <tr>
			        	<td>51</td>
			        	<td>016-164-85318</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>52</td>
			        	<td>017-920-00767</td>
			        	<td>500</td>
			        </tr>
			        <tr>
			        	<td>53</td>
			        	<td>017-072-37533</td>
			        	<td>50</td>
			        </tr>
			        <tr>
			        	<td>54</td>
			        	<td>017-845-36891</td>
			        	<td>900</td>
			        </tr>
			        <tr>
			        	<td>55</td>
			        	<td>017-069-02064</td>
			        	<td>50</td>
			        </tr>
			        <tr>
			        	<td>56</td>
			        	<td>018-556-12325</td>
			        	<td>200</td>
			        </tr>
			        <tr>
			        	<td>57</td>
			        	<td>017-037-83566</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>58</td>
			        	<td>ibanking city</td>
			        	<td>1000</td>
			        </tr>
			        <tr>
			        	<td>59</td>
			        	<td>017-767-89839</td>
			        	<td>500</td>
			        </tr>
			        <tr>
			        	<td>60</td>
			        	<td>017-007-31699</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>61</td>
			        	<td>018-891-40046</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>62</td>
			        	<td>017-845-36891</td>
			        	<td>2000</td>
			        </tr>
			        <tr>
			        	<td>63</td>
			        	<td>019-940-81342</td>
			        	<td>50</td>
			        </tr>
			        <tr>
			        	<td>64</td>
			        	<td>015-331-63750</td>
			        	<td>500</td>
			        </tr>
			        <tr>
			        	<td>65</td>
			        	<td>018-565-65601</td>
			        	<td>50</td>
			        </tr>
			        <tr>
			        	<td>66</td>
			        	<td>017-039-86373</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>67</td>
			        	<td>017-52719294</td>
			        	<td>1000</td>
			        </tr>
			        <tr>
			        	<td>68</td>
			        	<td>016-708-42619</td>
			        	<td>1500</td>
			        </tr>
			        <tr>
			        	<td>69</td>
			        	<td>015-215-58796</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>70</td>
			        	<td>017-80153860</td>
			        	<td>50</td>
			        </tr>
			        <tr>
			        	<td>71</td>
			        	<td>017-085-18261</td>
			        	<td>50</td>
			        </tr>
			        <tr>
			        	<td>72</td>
			        	<td>017-039-86373</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>73</td>
			        	<td>Mutual trust usa</td>
			        	<td>5000</td>
			        </tr>
			        <tr>
			        	<td>74</td>
			        	<td>016-112-61295</td>
			        	<td>500</td>
			        </tr>
			        <tr>
			        	<td>75</td>
			        	<td>015-345-77498</td>
			        	<td>8000</td>
			        </tr>
			        <tr>
			        	<td>76</td>
			        	<td>017-114-89528</td>
			        	<td>370</td>
			        </tr>
			        <tr>
			        	<td>77</td>
			        	<td>015-372-84836</td>
			        	<td>200</td>
			        </tr>
			        <tr>
			        	<td>78</td>
			        	<td>017-666-83097</td>
			        	<td>3000</td>
			        </tr>
			        <tr>
			        	<td>79</td>
			        	<td>017-592-03923</td>
			        	<td>1000</td>
			        </tr>
			        <tr>
			        	<td>80</td>
			        	<td>019-695-01713</td>
			        	<td>100</td>
			        </tr>
			        <tr>
			        	<td>81</td>
			        	<td>017-122-32294</td>
			        	<td>200</td>
			        </tr>
			        <tr>
			        	<td>82</td>
			        	<td>017-462-09333</td>
			        	<td>307</td>
			        </tr>
			    </tbody>
			</table>
		</div>
		<div class="col-md-4">
			<h3 style="text-align: right;">Target 400 family to help</h3>
			<h3 style="text-align: right;">Per family approx 1500 BDT</h3>
			<h3 style="text-align: right;">Total amount we need 600000BDT</h3>
			<h3 style="text-align: right;">Amount we collected 45185 BDT</h3>
			<h3 style="text-align: right;">Amount we lacking 540815 BDT</h3>
			<h3 style="text-align: right;">Donated 28606 BDT</h3>
			<h3 style="text-align: right;">Cash out charge 449 BDT</h3>
			<h3 style="text-align: right;">Amount in hand 30130 BDT</h3>
		</div>
	</div>
</div>

@endsection

@section('js')

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#donation_list').DataTable({
    	"pageLength": 25
    });
} );
</script>
@endsection