<template>
    <div class="content tabs">
        <tabs
            :tabs="tabs"
            :currentTab="currentTab"
            :wrapper-class="'disabled-tabs'"
            :tab-class="'disabled-tabs__item'"
            :tab-active-class="'disabled-tabs__item_active'"
            :line-class="'disabled-tabs__active-line'"
            @onClick="handleClick"
        />
        <div class="tab-content">
            <div v-if="currentTab === 'tab1'">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum.
                </p>
            </div>
            <div v-if="currentTab === 'tab2'">

            </div>
            <div v-if="currentTab === 'tab3'">
                <ul>
                    <li><a href="/news">All News</a></li>
                    <li><a href="/news/recent">Recent News</a></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>

    import Tabs from './VueTabsWithActiveLine.vue';
    import config from '../../server_config.json';

    const TABS = [{
        title: 'About Us',
        value: 'tab1',
        disabled: config.Tab1,
    }, {
        title: 'Disabled',
        value: 'tab2',
        disabled: config.Tab2,
    }, {
        title: 'News',
        value: 'tab3',
        disabled: config.Tab3,
    }];
    export default {
        components: {
            Tabs,
        },
        data: () => ({
            tabs: TABS,
            currentTab: 'tab1',
        }),
        methods: {
            handleClick(newTab) {
                this.currentTab = newTab;
            },
        }
    }
</script>

