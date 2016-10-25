<template>
    <div class="table-responsive">
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
            <tbody v-if="_.size(output)">
                <tr v-for="pkg in output" :class="pkg.highlight_reached_commit">
                    <td class="text-left ">{{pkg.package | toUpper}}</td>
                    <td class="text-right">{{pkg.output_lot_quantity_count | numberFormat}}</td>
                    <td class="text-right">{{pkg.output_unit_quantity_count | numberFormat}}</td>
                    <td class="text-right">{{pkg.commit.lot_quantity | numberFormat}}</td>
                    <td class="text-right">{{pkg.commit.unit_quantity | numberFormat}}</td>
                    <td class="text-right">{{pkg.delta_of_lot_quantity | numberFormat | numberSign}}</td>
                    <td class="text-right">{{pkg.delta_of_unit_quantity | numberFormat | numberSign}}</td>
                </tr>
            </tbody>
            <tfoot v-else>
                <tr>
                    <td colspan="7" class="text-center">
                        sorry, no record found in the database
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</template>
<style>
    .table * {
        border: none !important;
    }
</style>

<script>
    import { numberFormat, numberSign } from "./../modules/numberFormats";
    import { toUpper } from "./../modules/stringFormats";
    export default {
        filters: {
            numberFormat,
            numberSign,
            toUpper
        },

        props: ['output'],
    }
</script>
