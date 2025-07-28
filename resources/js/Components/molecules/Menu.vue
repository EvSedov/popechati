<script setup lang="ts">
import {
    NavigationMenu,
    NavigationMenuItem,
    NavigationMenuLink,
    NavigationMenuList,
    navigationMenuTriggerStyle,
} from "@/Components/atoms/ui/navigation-menu";
import { scrollToSection } from "@/lib/utils";

const components: { title: string; href: string; description: string }[] = [
    {
        title: "Alert Dialog",
        href: "/docs/components/alert-dialog",
        description:
            "A modal dialog that interrupts the user with important content and expects a response.",
    },
    {
        title: "Hover Card",
        href: "/docs/components/hover-card",
        description:
            "For sighted users to preview content available behind a link.",
    },
    {
        title: "Progress",
        href: "/docs/components/progress",
        description:
            "Displays an indicator showing the completion progress of a task, typically displayed as a progress bar.",
    },
    {
        title: "Scroll-area",
        href: "/docs/components/scroll-area",
        description: "Visually or semantically separates content.",
    },
    {
        title: "Tabs",
        href: "/docs/components/tabs",
        description:
            "A set of layered sections of content—known as tab panels—that are displayed one at a time.",
    },
    {
        title: "Tooltip",
        href: "/docs/components/tooltip",
        description:
            "A popup that displays information related to an element when the element receives keyboard focus or the mouse hovers over it.",
    },
];
</script>

<template>
    <NavigationMenu>
        <NavigationMenuList class="flex-wrap gap-0 tracking-wider">
            <NavigationMenuItem>
                <NavigationMenuLink
                    href="#hero"
                    class="mx-0 pl-0"
                    :class="navigationMenuTriggerStyle()"
                    @click="scrollToSection"
                >
                    Главная
                </NavigationMenuLink>
            </NavigationMenuItem>
            <NavigationMenuItem>
                <NavigationMenuLink
                    href="#how-we-work"
                    class="mx-0 px-0"
                    :class="navigationMenuTriggerStyle()"
                    @click="scrollToSection"
                >
                    Как мы работаем?
                </NavigationMenuLink>
            </NavigationMenuItem>
            <NavigationMenuItem>
                <NavigationMenuLink
                    href="#examples"
                    :class="navigationMenuTriggerStyle()"
                    @click="scrollToSection"
                >
                    Наши работы и портфолио
                </NavigationMenuLink>
            </NavigationMenuItem>
            <NavigationMenuItem>
                <NavigationMenuLink
                    href="#contacts"
                    :class="navigationMenuTriggerStyle()"
                    @click="scrollToSection"
                >
                    Контакты
                </NavigationMenuLink>
            </NavigationMenuItem>
            <NavigationMenuItem>
                <NavigationMenuLink
                    href="#faqs"
                    :class="navigationMenuTriggerStyle()"
                    @click="scrollToSection"
                >
                    Часто задаваемые вопросы
                </NavigationMenuLink>
            </NavigationMenuItem>
        </NavigationMenuList>
    </NavigationMenu>
</template>
