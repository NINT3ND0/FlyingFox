<template>
   <div id="app">

       <fox-header></fox-header>
       <search-box/>
       <v-range-selector
           :start-date.sync="range.start"
           :end-date.sync="range.end"/>

       <v-day-selector
           v-model="date"/>
       <fox-footer></fox-footer>
   </div>
</template>

<script>
    import Header from '../components/Header.vue'
    import Footer from '../components/Footer.vue'
    import Search_block from '../components/Search_block'
    import VRangeSelector from './vl-range-selector'
    import VDaySelector from './vl-day-selector'
    export default {
        name: 'App',
        components: {
            'fox-header': Header,
            'fox-footer': Footer,
            'search-box': Search_block,
            VRangeSelector,
            VDaySelector
        },
        data () {
            return {
                range: {},
                date: null
            }
        }
    }
</script>

<style lang="scss">
    @import '../../sass/main.scss';
</style>
