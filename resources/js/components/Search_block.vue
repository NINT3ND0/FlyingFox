<template>
    <section class="main-content content">
        <div class="search_block">
            <form method="GET" action="/flights">
                {{csrf_field}}

                <div class="search_radio_buttons">
                    <h2 class="motto">
                        The fastest flight booking!
                    </h2>
                    <label class="trip_type_selector">One way
                        <input type="radio" class="radio_btn" name="one_way" value="on">
                        <span class="radio_circle"></span>
                    </label>
                    <label class="trip_type_selector">Round trip
                        <input type="radio" class="radio_btn" name="round_trip" value="on">
                        <span class="radio_circle"></span>
                    </label>
                    <label class="trip_type_selector">Business
                        <input type="checkbox" class="checkbox_btn" name="business_clas" value="on">
                        <span class="checkmark"></span>
                    </label>
                    <label class="trip_type_selector">First class
                        <input type="checkbox" class="checkbox_btn" name="first_class" value="on">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="detail_controls">
                    <div class="trip_details">
                        <label>
                            From
                            <input type="text" class="destination_input" placeholder="Country, city or airport" value="" name="From">
                        </label>
                    </div>
                    <div class="trip_details">
                        <label>
                            To
                            <input type="text" class="destination_input" placeholder="Country, city or airport" value="" name="To">
                        </label>
                    </div>
                    <div class="trip_details">
                        <label>
                            Passengers
                            <input type="number" class="passengers_quantity" placeholder="Passengers" value="" name="num_of_passengers" min="1" max="4">
                        </label>
                    </div>
                    <div class="date_range_selector trip_details">
                        <label>
                            Depart
                            <input type="date" class="date_input" placeholder="Depart date" value="" name="depart_date">
                        </label>
                    </div>
                    <div class="date_range_selector trip_details">
                        <label>
                            Return
                            <input type="date" class="date_input" placeholder="Return date" value="" name="return_date">
                        </label>
                    </div>
                    <div class="search_btn_container trip_details">
                        <button class="search_btn" type="submit" title="Search" aria-label="Search Flights">
                            Search
                        </button>
                    </div>
                </div>
                <input type="hidden" name="_token" :value="csrf">
            </form>
        </div>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                csrf: document.head.querySelector('meta[name="csrf-token"]').content
            }
        }
    }
</script>

