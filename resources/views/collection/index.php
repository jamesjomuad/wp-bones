<?php
/*
<div id="app" v-cloak>
    <v-app>
        <v-card tile class="m-6">
            <v-app-bar dark color="green accent-3">
                <v-toolbar-title>My Garden</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-text-field hide-details single-line></v-text-field>
                <v-btn icon>
                    <v-icon>mdi-magnify</v-icon>
                </v-btn>
                <v-btn icon @click="grid = !grid">
                    <v-icon v-if="grid">mdi-apps</v-icon>
                    <v-icon v-if="!grid">mdi-format-list-bulleted-square</v-icon>
                </v-btn>
            </v-app-bar>

            <v-container>
                <v-row dense>
                    <v-col v-for="(item, i) in plants" :key="i" :cols="grid ? '3' : '12'">
                        <v-card :color="item.color || '#385F73'" dark>
                            <div class="d-flex flex-wrap justify-space-between">
                                <div>
                                    <v-card-title class="headline" v-text="item.title"></v-card-title>
                                    <v-card-subtitle v-text="item.description"></v-card-subtitle>
                                </div>

                                <v-avatar class="ma-3" size="125" tile>
                                    <v-img :src="item.src"></v-img>
                                </v-avatar>

                                <v-card-actions>
                                    <v-btn text>Show</v-btn>
                                </v-card-actions>
                            </div>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-card>
    </v-app>
</div>
*/ ?>

<div id="vApp"></div>