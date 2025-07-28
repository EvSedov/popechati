import { type ClassValue, clsx } from "clsx";
import { twMerge } from "tailwind-merge";

export function cn(...inputs: ClassValue[]) {
    return twMerge(clsx(inputs));
}

export const scrollToSection = (targetId: string) => {
    if (targetId) {
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            const elementPosition =
                targetElement.getBoundingClientRect().top + window.scrollY;
            const offsetPosition = elementPosition;

            window.scrollTo({
                top: offsetPosition,
                behavior: "smooth",
            });
        }
    }
};
