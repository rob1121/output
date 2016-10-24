<template>
    <div>

        <h2><slot></slot></h2>
        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th class="text-right" colspan="2">Output</th>
                <th class="text-right" colspan="2">Commit</th>
                <th class="text-right" colspan="2">Delta</th>
            </tr>
            <tr>
                <th class="text-left">Package</th>
                <th class="text-right">Lot Quantity</th>
                <th class="text-right">Unit Quantity</th>
                <th class="text-right">Lot Quantity</th>
                <th class="text-right">Unit Quantity</th>
                <th class="text-right">Lot Quantity</th>
                <th class="text-right">Unit Quantity</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="pkg in output" :class="pkg.highlight_reached_commit" v-if="output">
                <td class="text-left ">{{pkg.package}}</td>
                <td class="text-right">{{pkg.output_lot_quantity_count | numberFormat}}</td>
                <td class="text-right">{{pkg.output_unit_quantity_count | numberFormat}}</td>
                <td class="text-right">{{pkg.commit.lot_quantity | numberFormat}}</td>
                <td class="text-right">{{pkg.commit.unit_quantity | numberFormat}}</td>
                <td class="text-right">{{pkg.delta_of_lot_quantity | numberFormat | numberSign}}</td>
                <td class="text-right">{{pkg.delta_of_unit_quantity | numberFormat | numberSign}}</td>
            </tr>
            <tr v-else><td colspan="7">fetching output ...</td></tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import { numberFormat, numberSign } from "./modules/numberFormats";
    export default {
        filters: {
            numberFormat,
            numberSign
        },

        props: ['output']
    }
</script>
