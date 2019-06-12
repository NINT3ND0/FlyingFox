<template>
    <section class="main-content content">
        <div class="search_block">
            <form>
                <div class="search_radio_buttons">
                    <h2 class="motto">
                        The fastest flight booking!
                    </h2>
                    <label class="trip_type_selector">One way
                        <input type="radio" class="radio_btn" name="trip-type-selector" value="on">
                        <span class="radio_circle"></span>
                    </label>
                    <label class="trip_type_selector">Round trip
                        <input type="radio" class="radio_btn" name="trip-type-selector" value="on">
                        <span class="radio_circle"></span>
                    </label>
                    <label class="trip_type_selector">Business
                        <input type="checkbox" class="checkbox_btn" name="trip-type-selector" value="on">
                        <span class="checkmark"></span>
                    </label>
                    <label class="trip_type_selector">First class
                        <input type="checkbox" class="checkbox_btn" name="trip-type-selector" value="on">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="detail_controls">
                    <div class="trip_details">
                        <label>
                            From
                            <input type="text" class="destination_input" placeholder="Country, city or airport" value="Kyiv (Any)">
                        </label>
                    </div>
                    <div class="trip_details">
                        <label>
                            To
                            <input type="text" class="destination_input" placeholder="Country, city or airport" value="Dortmund">
                        </label>
                    </div>
                    <div class="trip_details">
                        <label>
                            Passengers
                            <input type="text" class="passengers_quantity" placeholder="Number of passengers" value="1">
                        </label>
                    </div>
                    <div class="date_range_selector trip_details">
                        <label>
                            Depart
                            <input type="text" class="depart_date_input" placeholder="Depart date" value="6/5/19">
                        </label>
                    </div>
                    <div class="date_range_selector trip_details">
                        <label>
                            Return
                            <input type="text" class="return_date_input" placeholder="Return date" value="6/5/19">
                        </label>
                    </div>
                    <div class="search_btn_container trip_details">
                        <button class="search_btn" type="button" title="Search" aria-label="Search Flights">
                            Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</template>

<script>
    export default {
        data() {
            return {}
        }
    }
</script>

